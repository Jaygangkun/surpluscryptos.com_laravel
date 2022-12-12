@if(session('message'))
    <p class="alert alert-danger text-center text-capitalize">{{session('message')}}</p>
@endif
@if(session('danger'))
    <p class="alert alert-danger text-center text-capitalize">{{session('danger')}}</p>
@endif
@if(session('success'))
    <p class="alert alert-success text-center text-capitalize">{{session('success')}}</p>
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p class="alert alert-danger text-center">{{$error}}</p>
    @endforeach
@endif
