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
            <form>
                <label>Your Local Certified Crypto Advisor</label>
                <input type="text" class="form-control" readonly value="{{$user->myPartner->name}}">
                <label>Partner Contact Number</label>
                <input type="number" class="form-control" readonly value="{{$user->myPartner->phone}}">
                <label>Partner Email Address</label>
                <input type="email" class="form-control" readonly value="{{$user->myPartner->email}}">
            </form>
        </div>
    </div>
@stop
@section('js')
    <script>

    </script>
@stop

