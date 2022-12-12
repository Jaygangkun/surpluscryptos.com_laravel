@extends('backend.auth.master')
@section('content')
    <section class="signin-sec">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 bg-white box">
                    <img src="{{$gs->logoPath()}}" alt="">
                    <h2>Sign In</h2>
                    <form action="{{route('login.post')}}" method="post">
                        @include('backend.layouts.includes.form-errors')
                        @csrf
                        <label for="">Email</label>
                        <input type="email" placeholder="" required name="email" id="email">
                        <label for="">Password</label>
                        <input required type="password" placeholder="" name="password" id="password">
                        <div class="row">
                            <div class="col">
                                <input type="checkbox"><span>Remember me</span>
                            </div>
                            <div class="col text-right">
                                <a href="{{url('forgot-password')}}">Forgot Password</a>
                            </div>
                        </div>
                        <div class="btn-area">
                            <input type="submit" value="Next">
                            <p>Don't have an account yet? click <a href="{{route('register.index')}}">here</a> to Sign
                                Up</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
