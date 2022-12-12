<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\ClientContractAsset;
use App\Models\ContractAsset;
use App\Models\Product;
use App\Models\ProductContent;
use App\Models\ProductMeta;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ClientContractAssetController extends Controller
{
    const VIEW = 'backend.clients.contract-assets';
    const TITLE = 'Contract Assets';
    const ROUTE = 'client-contract-assets';
    const SRC = 'images/contract-assets';

    public function __construct()
    {
        view()
            ->share([
                'title' => self::TITLE,
                'url' => route(self::ROUTE . '.index'),
            ]);
    }

    public function index(Request $request)
    {


        return view(self::VIEW . '.index', [
            'records' => $this->getRecords($request)
        ]);

    }

    public function getRecords($request)
    {
        $categories = $request->categories;
        $brands = $request->brands;

        return $records = ContractAsset::when($brands, function ($q) use ($brands) {
            $q->whereIn('brand_id', $brands);
        })
            ->when($categories, function ($q) use ($categories) {
                $q->whereIn('category_id', $categories);
            })
            ->latest()
            ->get();

    }

    public function create()
    {
        return view(self::VIEW . '.create', [
        ]);
    }

    public function store(Request $request)
    {
        switch ($request->step) {
            case 1:

                $contract_asset = ContractAsset::find($request->record_id);
                if ($contract_asset) {
                    $min_amount = $contract_asset->min_amount;
                    $request->validate([
                        'initial_amount' => "required|numeric|between:{$min_amount},{$contract_asset->max_amount}",
//                        'crypto_value_at_maturity' => 'required',
                        'years' => 'required',
                    ]);
                    return response()
                        ->json([
                            'message' => 'Success',
                        ]);
                }

                break;

            case 3:

                $request->validate([
//                    'prefix_name' => "required",
                    'first_name' => 'required',
//                    'middle_name' => 'required',
                    'last_name' => 'required',
                ]);
                return response()
                    ->json([
                        'message' => 'Success',
                    ]);

                break;

            case 4:
                $request->validate([
                    'name' => "required",
                    'street' => "required",
                    'city' => 'required',
                    'zipcode' => 'required',
                    'tax_number' => 'required',
                ]);
                return response()
                    ->json([
                        'message' => 'Success',
                    ]);

                break;

            case 5:
                $request->validate([
                    'beneficiary_gender' => "required",
                    'beneficiary_dob' => 'required',
                    'beneficiary_ssn' => 'required',
                    'beneficiary_relationship' => 'required',
                ]);

                return response()
                    ->json([
                        'message' => 'Success',
                    ]);

                break;

            case 6:
                $request->validate([
                    'allocation_percent' => "required",
                    'beneficiary_email' => 'required',
                    'beneficiary_phone' => 'required',
                ]);

                return response()
                    ->json([
                        'message' => 'Success',
                    ]);

                break;
            case 'wire_payment':

                $request->validate([
                    'amount' => "required",
                    'wire_email' => 'required|email',
                ]);

                \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

                $customer = \Stripe\Customer::create([
                    'email' => $request->wire_email,
                    'description' => 'Customer to invoice',
                ]);

                // Create an Invoice Item with the Price, and Customer you want to charge
                $invoiceItem = \Stripe\InvoiceItem::create([ // You can create an invoice item after the invoice
                    'customer' => $customer->id,
                    'amount' => ($request->initial_amount * 100),
                    'currency' => 'usd',
                ]);

                // Create an Invoice
                $invoice = \Stripe\Invoice::create([
                    'customer' => $customer->id,
                    'collection_method' => 'send_invoice',
                    'days_until_due' => 3,
                    'payment_settings' => [
                        'payment_method_types' => ['ach_credit_transfer'],
                    ],
                ]);

                // Send the Invoice
                $invoice->sendInvoice();

                $this->storeContract($request);
                return response()
                    ->json([
                        'message' => 'Success',
                    ]);

                break;

            case 'ach_payment':

//                $request->validate([
//                    'record_id' => "required",
//                    'initial_amount' => "required",
//                ]);

                \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

//                $customer = \Stripe\Customer::create([
//                    'email' => auth()->user()->email,
//                ]);

//                $price = $stripe->prices->create([
//                    'unit_amount' => ($request->initial_amount * 100),
//                    'currency' => 'usd',
//                    'product' => env('STRIPE_PRODUCT'),
//                ]);

                $checkout_session = \Stripe\Checkout\Session::create([
                    'payment_method_types' => ['us_bank_account'],
                    'payment_method_options' => [
                        'us_bank_account' => [
                            'verification_method' => 'instant',
                            'financial_connections' => ['permissions' => ['payment_method']],
                        ],
                    ],
                    'line_items' => [
                        [
                            'price_data' => [
                                'currency' => 'usd',
                                'unit_amount' => ($request->initial_amount * 100),
                                'product_data' => ['name' => ContractAsset::find($request->record_id)->name],
                            ],
                            'quantity' => 1,
                        ],
                    ],
//                    'line_items' => [[
//                        'price' => $price->id,
//                        'quantity' => 1,
//                    ]],
                    'mode' => 'payment',
                    'success_url' => url('stripe-success'),
                    'cancel_url' => url('stripe-cancel'),
                ]);

                $this->storeContract($request);

                return redirect($checkout_session->url);


                break;

            case 'card_payment':


                \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));


                $checkout_session = \Stripe\Checkout\Session::create([
                    'payment_method_types' => ['card'],
                    'line_items' => [
                        [
                            'price_data' => [
                                'currency' => 'usd',
                                'unit_amount' => ($request->initial_amount * 100),
                                'product_data' => ['name' => ContractAsset::find($request->record_id)->name],
                            ],
                            'quantity' => 1,
                        ],
                    ],
                    'mode' => 'payment',
                    'success_url' => url('stripe-success'),
                    'cancel_url' => url('stripe-cancel'),
                ]);

                $this->storeContract($request);

                return redirect($checkout_session->url);

                break;

        }

        $this->storeContract($request);

        return response()
            ->json([
                'message' => 'Success',
            ]);

    }

    public function storeContract($request)
    {

        $data = $request->except('record_id', 'step', 'amount');
        $user = auth()->user();
        $contract_asset = ContractAsset::find($request->record_id);
        $partner_commission_rate = 0;
        if ($user->myPartner) {
            $data['partner_id'] = $user->myPartner->id;
            $partner_commission_rate = $user->myPartner->partner_commission_rate;
        }

        $data['client_id'] = $user->id;
        $data['contract_asset_id'] = $request->record_id;
        $data['status'] = 'pending';
        $data['commission_paid_status'] = 'pending';

        if ($contract_asset) {
            $data['guaranteed_rate'] = $contract_asset->guaranteed_rate;
            $data['commission_percent'] = $contract_asset->commission_percent;
            $data['min_amount'] = $contract_asset->min_amount;
            $commission_percent = $contract_asset->commission_percent;
            if ($partner_commission_rate < $commission_percent) {
                $commission_percent = $partner_commission_rate;
            }
            $data['partner_commission'] = ($request->initial_amount * $commission_percent) / 100;
        }

        $record = ClientContractAsset::create($data);

        return $record;
    }

    public function show($id)
    {

        $record = ContractAsset::findOrFail($id);
        if (request('detail')) {
            return [
                'record' => $record
            ];
        }
        $years = [3];

        if ($record->years == 5) {
            $years[] = 5;
        }
        if ($record->years == 7) {
            $years[] = 5;
            $years[] = 7;
        }
        if ($record->years == 10) {
            $years[] = 5;
            $years[] = 7;
            $years[] = 10;
        }
        return view(self::VIEW . '.show', [
            'record' => $record,
            'years' => $years,
        ]);
    }

    public function edit($id)
    {
        $record = ContractAsset::findOrFail($id);
        return view(self::VIEW . '.edit', [
            'record' => $record,
        ]);

    }

    public function update(Request $request, $id)
    {
        $data = $request->except('thumbnail', 'catalogue');
        $record = ContractAsset::findOrFail($id);

//        $img = $request->file('thumbnail');
//        if ($img) {
//            $data['thumbnail'] = saveImage($img, self::SRC);
//        }
//
//        $img = $request->file('catalogue');
//        if ($img) {
//            $data['catalogue'] = saveImage($img, self::SRC);
//        }

        $record->update($data);
        return redirect(self::ROUTE)->with([
            'message' => self::TITLE . ' has been updated',
        ]);
    }

    public function destroy($id)
    {
        $record = ContractAsset::findOrFail($id);
        $record->delete();

        return [
            'toast' => [
                'message' => self::TITLE . ' has been deleted',
                'type' => 'success'
            ]
        ];

    }

    public function deleteMetas($id)
    {

    }
}
