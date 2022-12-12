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

class PartnerController extends Controller
{
    const VIEW = 'backend.partners';
    const TITLE = 'Partner';
    const ROUTE = 'partners';
    const SRC = 'images/users';

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

        return $records = User::role(2)
            ->when($categories, function ($q) use ($categories) {
                $q->whereIn('category_id', $categories);
            })
            ->latest()
            ->with('myClients')
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

    public function uniqueValidation($request, $id = null)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $id,
            'partner_number' => 'required|unique:users,partner_number,' . $id
        ]);
    }

    public function store(Request $request)
    {

        $this->uniqueValidation($request);
        $data = $request->except('password');
        $data['password'] = bcrypt($request->password);
        $data['email_verified_at'] = now();
        $record = User::create($data);
        $record->assignRole(2);

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
        $record = User::findOrFail($id);
        return view(self::VIEW . '.edit', [
            'record' => $record,
        ]);

    }

    public function update(Request $request, $id)
    {
        $this->uniqueValidation($request, $id);
        $data = $request->except('password');
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }
        $record = User::findOrFail($id);

        $record->update($data);
        return redirect(self::ROUTE)->with([
            'message' => self::TITLE . ' has been updated',
        ]);
    }

    public function destroy($id)
    {
        $record = User::findOrFail($id);
        $record->email .= '-' . $record->id;
        $record->save();
        $record->delete();

        return [
            'toast' => [
                'message' => self::TITLE . ' has been deleted',
                'type' => 'success'
            ]
        ];

    }

}
