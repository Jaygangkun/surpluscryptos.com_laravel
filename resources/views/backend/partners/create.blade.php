@extends('backend.layouts.master')
@section('css')

@stop
@section('content')
    <h3 class="mb-3 text-center">New {{$title}} </h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form action="{{$url}}" method="POST" class="pt-0">
                @csrf

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" required placeholder="John" name="name">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Last Name</label>
                    <input type="text" class="form-control" required placeholder="Smith" name="last_name">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="email" class="form-control" required placeholder="Email" name="email">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Phone</label>
                    <input type="text" class="form-control" placeholder="1234556" name="phone">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Partner Commission Percentage</label>
                    <input type="number" step="any" class="form-control" placeholder="10%" name="partner_commission_rate">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Partner Number</label>
                    <input type="text" class="form-control" placeholder="00000000" required name="partner_number">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Upline Partner Number</label>
                    <input type="text" class="form-control" placeholder="00000" name="upline_number">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Bitcoin Wallet Address</label>
                    <input type="text" class="form-control" placeholder="1234567996796754545" name="bitcoin_address">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Create a Password</label>
                    <input type="password" class="form-control" placeholder="*********" required name="password">
                </div>

                <div class="nextBtnCtrl text-center mt-5">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </form>
        </div>
    </div>
@stop
@section('js')

@stop

