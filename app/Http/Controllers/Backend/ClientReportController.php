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
use Illuminate\Support\Facades\Auth;


class ClientReportController extends Controller
{
    const VIEW = 'backend.clients.reports';
    const TITLE = 'Reports';
    const ROUTE = 'client-reports';
    const SRC = 'images/reports';

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

         $records = ClientContractAsset::when($brands, function ($q) use ($brands) {
            $q->whereIn('brand_id', $brands);
            
        }) ->where('client_id',Auth::id())  
            ->where('status','approved')
            ->when($categories, function ($q) use ($categories) {
                $q->whereIn('category_id', $categories);
            })
            ->with('contractAsset', 'partner', 'client')
            
            ->latest()
            ->get();
        
        
        return $records;

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
        $record = ClientContractAsset::findOrFail($id);

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

    }

    public function deleteMetas($id)
    {

    }
}
