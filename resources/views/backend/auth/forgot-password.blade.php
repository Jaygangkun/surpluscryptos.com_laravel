@extends('backend.auth.master')

@section('content')
    <section class="signin-sec">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 bg-white box">
                    <img src="{{$gs->logoPath()}}" alt="">
                    <h2>Forgot Password</h2>
                    <form action="{{url('forgot-password')}}" method="post">
                        @include('backend.layouts.includes.form-errors')
                        @csrf
                        <label for="">Email</label>
                        <input type="email" placeholder="" required name="email" id="email">
                        <div class="btn-area">
                            <input type="submit" value="Next">
                            <p>Click <a href="{{route('login')}}">here</a> to Sign in</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
