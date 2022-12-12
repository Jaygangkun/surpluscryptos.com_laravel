<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\ContractAsset;
use App\Models\Product;
use App\Models\ProductContent;
use App\Models\ProductMeta;
use App\Models\Support;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ClientSupportController extends Controller
{
    const VIEW = 'backend.clients.support';
    const TITLE = 'Support';
    const ROUTE = 'support';
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

        $data = $request->except('id');

        $user = auth()->user();
        $data['user_id'] = $user->id;
        Support::create($data);

        if ($request->ajax()) {
            session()->flash('message', self::TITLE . ' has been Sent',);
            return response()->json([
                'message' => self::TITLE . ' has been Sent',
            ]);
        }

        return redirect(self::ROUTE)->with([
            'message' => self::TITLE . ' has been Sent',
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
