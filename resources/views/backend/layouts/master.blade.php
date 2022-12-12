<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{$gs->title}}</title>
    <!-- plugins:css -->
    @include('backend.layouts.includes.favicon')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('/')}}vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('/')}}vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}javascript/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/')}}css/vertical-layout-light/style.css">
    <!-- endinject -->

    <link rel="stylesheet" href="{{asset('/')}}css/custom.css">
    <link rel="stylesheet" href="{{asset('/')}}vendors/sweetalert2/sweetalert2.css">

</head>
<body class="sidebar-mini">
<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
@include('backend.layouts.header')

<!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
    @include('backend.layouts.sidebar')
    <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @include('backend.layouts.includes.form-errors')
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © {{date('Y')}}. Surplus. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('/')}}vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('/')}}vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('/')}}vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{asset('/')}}vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="{{asset('/')}}javascript/dataTables.select.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('/')}}javascript/off-canvas.js"></script>
<script src="{{asset('/')}}javascript/hoverable-collapse.js"></script>
<script src="{{asset('/')}}javascript/template.js"></script>
<script src="{{asset('/')}}javascript/settings.js"></script>
<script src="{{asset('/')}}javascript/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('/')}}javascript/jquery.cookie.js" type="text/javascript"></script>
<script src="{{asset('/')}}javascript/dashboard.js"></script>
<script src="{{asset('/')}}javascript/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
<script src="{{asset('/')}}vendors/sweetalert2/sweetalert2.js"></script>
<script>

    $(document).on('click', '.delete-btn', function (e) {
        e.preventDefault()
        var element = $(this);
        if (confirm("You won't be able to revert this!")) {
            $.ajax({
                method: 'DELETE',
                url: element.data('href'),
                data: {},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    location.reload()
                },
                error: function (response) {
                    alert(response.responseJSON ? response.responseJSON.message : 'something went wrong');
                }
            })
        }
    })

    function loading(attr = true) {
        if (attr) {
            Swal.fire({
                title: 'Loading...',
                html: 'Please wait...',
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });
        } else {
            swal.close();
        }
    }

    $(document).on('submit', '.ajax-form', function (e) {
        e.preventDefault();

        loading()
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        var this_form = $(this);
        var formdata = new FormData(this);

        $.ajax({
            method: this_form.prop('method'),
            url: this_form.prop('action'),
            data: formdata,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                setTimeout(function () {
                    if (data.redirect_url) {
                        window.location.href = data.redirect_url
                        return
                    }
                    window.location.href = this_form.data('redirect')
                }, 200)
            },
            error: function (data) {
                loading(false)
                var responseJSON = data.responseJSON
                if (responseJSON) {
                    var errors = responseJSON.errors;
                    if (errors) {
                        for (var error in errors) {
                            var input_field_e = $('#' + error)
                            input_field_e.addClass('is-invalid')
                            input_field_e.after('<span  class="error invalid-feedback text-left">' + errors[error][0] + '</span>')
                        }
                    }
                }
            }
        });

        // if (this_form.find('#no_wait_response').length) {
        //     setTimeout(function () {
        //         toastAlert('Message', 'Success', 'success');
        //         window.location.href = this_form.data('redirect')
        //     }, 5000)
        // }

    });

</script>
@yield('js')

</body>

</html>

