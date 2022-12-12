<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\ContractAsset;
use App\Models\Product;
use App\Models\ProductContent;
use App\Models\ProductMeta;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContractAssetController extends Controller
{
    const VIEW = 'backend.contract-assets';
    const TITLE = 'Contract Assets';
    const ROUTE = 'contract-assets';
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
        if ($request->ajax() && $request->table) {
            return $this->getRecords($request);
        }
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
        return view(self::VIEW . '.create', [
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->except('catalogue', 'thumbnail');
        $data['user_id'] = auth()->id();
        ContractAsset::create($data);

        return redirect(self::ROUTE)->with([
            'message' => self::TITLE . ' has been saved',
        ]);
    }

    public function show($id)
    {
        $record = ContractAsset::findOrFail($id);
        if (request('detail')) {
            return [
                'record' => $record
            ];
        }
        return view(self::VIEW . '.show', [
            'record' => $record
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
