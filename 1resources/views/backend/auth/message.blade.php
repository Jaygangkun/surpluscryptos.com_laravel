@extends('backend.auth.master')
@section('content')
    <section class="signin-sec">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 bg-white box">
                    <img src="{{asset('/')}}img/LOGO.png" alt="" style="margin-bottom: 10px">
                    <br>
                    @include('backend.layouts.includes.form-errors')
                    <p>
                        Back To <a href="{{route('dashboard')}}">Dashboard</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop
