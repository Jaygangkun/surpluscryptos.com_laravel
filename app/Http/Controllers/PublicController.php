<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function welcome()
    {
        return view('welcome');
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
