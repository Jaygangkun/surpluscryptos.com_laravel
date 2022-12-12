@extends('backend.auth.master')
@section('content')
    <section class="signin-sec">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 bg-white box">
                    <img src="{{$gs->logoPath()}}" alt="">
                    <h2>Please enter your new password.</h2>
                    <form action="{{url('reset-password')}}"
                          method="post">
                        @include('backend.layouts.includes.form-errors')
                        @csrf
                        <input type="hidden" name="token" value="{{request()->segment(2)}}">
                        <input type="hidden" name="public_id" value="{{request()->segment(3)}}">
                        <label for="">Password</label>
                        <input type="password" placeholder="" required name="password" id="password">
                        <label for="">Confirm Password</label>
                        <input required type="password" placeholder="" name="password_confirmation" id="password_confirmation">
                        <div class="btn-area">
                            <input type="submit" value="Next">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
