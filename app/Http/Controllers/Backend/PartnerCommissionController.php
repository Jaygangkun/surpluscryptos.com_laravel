<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\ClientContractAsset;
use App\Models\ContractAsset;
use App\Models\Product;
use App\Models\ProductContent;
use App\Models\ProductMeta;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PartnerCommissionController extends Controller
{
    const VIEW = 'backend.partner-commissions';
    const TITLE = 'Commission Payouts';
    const ROUTE = 'partner-commissions';
    const SRC = 'images/partner-commissions';

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
        $user = auth()->user();

        $records = ClientContractAsset::when($brands, function ($q) use ($brands) {
            $q->whereIn('brand_id', $brands);
        })
            ->where('status', 'approved')
            ->when($categories, function ($q) use ($categories) {
                $q->whereIn('category_id', $categories);
            });

        if ($user->hasRole(2)) {
            $records = $records->where('partner_id', $user->id);
        }

        $records = $records
            ->latest()
            ->with('client', 'partner')
            ->get();
        return $records;
//        return DataTables::of($records)
//            ->addColumn('actions', function ($record) {
//                return view(self::VIEW . '.includes.actions', [
//                    'record' => $record
//                ])->render();
//            })
//            ->rawColumns(['actions', 'thumbnail', 'catalogue'])
//            ->setTotalRecords($records->count())
//            ->make(true);
    }

    public function create()
    {
        return view(self::VIEW . '.create');
    }

    public function store(Request $request)
    {
        $record = ClientContractAsset::find($request->id);
        if ($request->partner_commission_paid) {
            $record->partner_commission_paid_at = $request->partner_commission_paid_at;
            $record->save();
        }
        return response()->json(['message' => 'success']);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {


    }

}
