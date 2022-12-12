@extends('backend.auth.master')

@section('content')
    <p class="login-box-msg">Sign up to start your session</p>
    @include('backend.layouts.includes.form-errors')
    <form action="{{url('register')}}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Name"
                   required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Phone"
                   required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Email"
                   required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" required name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-key"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" required name="password_confirmation" class="form-control" placeholder="Confirm Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-key"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form>
    <hr>
    <p class="mb-1">
        <a href="{{url('login')}}">Back To Login</a>
    </p>
@stop
