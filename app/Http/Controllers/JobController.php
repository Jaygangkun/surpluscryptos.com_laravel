<?php

namespace App\Http\Controllers;

use App\Models\ClientContractAsset;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function accumutalion()
    {
//Accumulation formula
//starts being added after 46 days
//is added on a day daily basis
//A= Starting Value
//B= APY
//C= 365
//(A x B) / C = Accumulation
//Ex.
//(465 x 15%) / 365
//69.75 / 365
//.19 Added daily to Accumulation

        $records = ClientContractAsset::where()->get();
    }

    public function stripeSuccess()
    {
        session()->flash('success', 'Payment has been done');
        return view('backend.auth.message');
    }

    public function stripeCancel()
    {
        session()->flash('danger', 'Payment processing failed');
        return view('backend.auth.message');
    }

}
