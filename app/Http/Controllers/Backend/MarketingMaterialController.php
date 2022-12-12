<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\ContractAsset;
use App\Models\MarketingMaterial;
use App\Models\Product;
use App\Models\ProductContent;
use App\Models\ProductMeta;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MarketingMaterialController extends Controller
{
    const VIEW = 'backend.marketing-materials';
    const TITLE = 'Marketing Materials';
    const ROUTE = 'marketing-materials';
    const SRC = 'images/marketing-materials';

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

        return $records = MarketingMaterial::latest()
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

        $data = $request->except('file');
        $file = $request->file('file');
        if ($file) {
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $data['file_type'] = $file->getClientOriginalExtension();
            $data['file_size'] = $file->getSize();
            $data['file'] = $file_name;
            $file->move(self::SRC, $file_name);
        }

        MarketingMaterial::create($data);

        return redirect(self::ROUTE)->with([
            'message' => self::TITLE . ' has been saved',
        ]);

    }

    public function show($id)
    {
        $record = User::findOrFail($id);
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

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $record = MarketingMaterial::findOrFail($id);
        $record->delete();

        return [
            'toast' => [
                'message' => self::TITLE . ' has been deleted',
                'type' => 'success'
            ]
        ];

    }

}
