<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo me-5" href="{{route('dashboard')}}"><img src="{{$gs->logoPath()}}"
                                                                                   class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="{{$gs->logoPath()}}"
                                                                                   alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
