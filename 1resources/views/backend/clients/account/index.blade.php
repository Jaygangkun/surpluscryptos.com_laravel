<?php
$user = auth()->user();
?>
@extends('backend.layouts.master')
@section('css')

@stop

@section('content')
    <h3 class="mb-3">{{$title}}</h3>
    <div class="row d-flex justify-content-center account-page">
        <div class="col-md-6 bg-white grid-margin">
            <h3 class="name-user">{{$user->name}}</h3>
            <form action="{{$url}}" class="ajax-form" method="POST" data-redirect="{{$url}}">
                @csrf
                <label for="">Change Password</label>
                <input type="password" class="form-control" placeholder="********" name="password" id="password">
                <label for="">Change Email</label>
                <input type="email" class="form-control"  placeholder="your@email.com"
                       disabled
                       value="{{$user->email}}" id="email">
                <label for="">Change Phone Number</label>
                <input type="tel" class="form-control" required placeholder="1234567890" value="{{$user->phone}}"
                      readonly >
                <label for="">Enter Your Bitcoin Address</label>
                <input class="form-control" type="text" required placeholder="Enter Your BTC Address"
                       value="{{$user->bitcoin_address}}"
                       name="bitcoin_address" id="bitcoin_address">
                <br>
                <input type="submit" class="btn btn-primary" value="Save">
            </form>
        </div>
    </div>
@stop
@section('js')
    <script>

    </script>
@stop

