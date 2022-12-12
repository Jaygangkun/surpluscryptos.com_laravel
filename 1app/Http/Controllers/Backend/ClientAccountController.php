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

class ClientAccountController extends Controller
{
    const VIEW = 'backend.clients.account';
    const TITLE = 'My Account';
    const ROUTE = 'account';
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
        return view(self::VIEW . '.index');
    }

    public function create()
    {
        return view(self::VIEW . '.create', [
        ]);
    }

    public function store(Request $request)
    {

        $data = $request->only('phone', 'bitcoin_address');

        $record = auth()->user();

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $record->update($data);

        if ($request->ajax()) {
            session()->flash('message', self::TITLE . ' has been saved',);
            return response()->json([
                'message' => self::TITLE . ' has been saved',
            ]);
        }

        return redirect(self::ROUTE)->with([
            'message' => self::TITLE . ' has been saved',
        ]);
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
