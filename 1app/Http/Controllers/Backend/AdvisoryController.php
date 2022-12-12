<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\ContractAsset;
use App\Models\Product;
use App\Models\ProductContent;
use App\Models\ProductMeta;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdvisoryController extends Controller
{
    const VIEW = 'backend.advisories';
    const TITLE = 'Advisors';
    const ROUTE = 'advisories';
    const SRC = 'images/advisories';

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

        return $records = User::where('upline_number', $user->partner_number)
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

    public function deleteMetas($id)
    {

    }
}
