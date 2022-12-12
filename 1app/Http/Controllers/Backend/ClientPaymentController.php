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

class ClientPaymentController extends Controller
{
    const VIEW = 'backend.client-payments';
    const TITLE = 'Client Payment';
    const ROUTE = 'client-payments';
    const SRC = 'images/client-payments';

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

        return $records = ClientContractAsset::when($brands, function ($q) use ($brands) {
            $q->whereIn('brand_id', $brands);
        })
            ->when($categories, function ($q) use ($categories) {
                $q->whereIn('category_id', $categories);
            })
            ->latest()
            ->with('client', 'partner', 'contractAsset')
            ->get();

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
        $record->status = $request->status;
        $record->save();
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
