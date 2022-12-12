<!-- Google Font: Source Sans Pro -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700&amp;subset=cyrillic,latin'
      rel='stylesheet' type='text/css'>
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('/')}}plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{asset('/')}}plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('/')}}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('/')}}plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('/')}}dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('/')}}plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('/')}}plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('/')}}plugins/summernote/summernote-bs4.min.css">
<link rel="stylesheet" href="{{asset('/')}}plugins/toastr/toastr.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('/')}}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('/')}}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('/')}}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('/')}}plugins/ekko-lightbox/ekko-lightbox.css">
<link rel="stylesheet" href="{{asset('/')}}plugins/fullcalendar/main.css">

<link rel="stylesheet" href="{{asset('dist/css/custom.css')}}?v={{config('constants.asset_v')}}">
<link rel="stylesheet" href="{{asset('/')}}plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{asset('/')}}plugins/sweetalert2/sweetalert2.css">

<style>

    @page {
        size: unset;
    }

    .lang-code-input {
        width: 83px;
        text-transform: uppercase;
        text-align: center;
    }

    /*.select2-container--default .select2-results__option {*/
    /*    padding: 5px;*/
    /*}*/

    /*.select2-container--default .select2-selection--multiple .select2-selection__rendered li {*/
    /*    color: black !important;*/
    /*}*/

    /*.select2-container--default .select2-results__option--highlighted[aria-selected], .select2-container--default .select2-results__option--highlighted[aria-selected]:hover {*/
    /*    padding-left: 3px;*/
    /*    font-size: 0.9rem;*/
    /*}*/

    /*.select2-container .select2-selection--single .select2-selection__rendered {*/
    /*    padding-left: 0;*/
    /*    font-size: 0.9rem;*/
    /*}*/

    /*.select2-container--default .select2-selection--single {*/
    /*    padding-left: 4px;*/
    /*}*/

    body {
        -webkit-print-color-adjust: exact;
    }

    @media print {
        body {
            -webkit-print-color-adjust: exact;
        }

        .content-wrapper {
            background-color: white;
        }

        .page-break {
            page-break-after: always;
        }
    }

    .card-title {
        font-size: 1.3rem;
    }

    .select2-container .select2-selection--single {
        height: 38px;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    .bg-warning, .bg-warning > a {
        color: white !important;
    }

    legend {
        width: revert;
    }

    fieldset {
        padding: revert;
        margin: revert;
        border: revert;
    }

    @if(!$gs->show_loader)
        .preloader {
        height: 0;
    }

    .preloader img {
        opacity: 0;
    }

    @endif
        table.dataTable > thead .sorting:before, table.dataTable > thead .sorting_asc:before, table.dataTable > thead .sorting_desc:before, table.dataTable > thead .sorting_asc_disabled:before, table.dataTable > thead .sorting_desc_disabled:before, table.dataTable > thead .sorting:after, table.dataTable > thead .sorting_asc:after, table.dataTable > thead .sorting_desc:after, table.dataTable > thead .sorting_asc_disabled:after, table.dataTable > thead .sorting_desc_disabled:after {
        content: '';
    }

    .row-eq-height {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .btn {
        text-transform: capitalize;
        {{--padding: .2rem .5rem;--}}
        {{--font-size: {{$gs->text_size}}px;--}}
    }

    .modal-xxl {
        max-width: 100% !important;
        margin: 1% !important;
    }

    .no-list-style {
        list-style: none !important;
    }

    @media (max-width: 767.98px) {
        .small-box .icon {
            display: block;
        }

        .small-box p {
            text-align: left !important;

        }

        .header-greeting-text{
            font-size: smaller;
            margin-top: 7px;
        }
    }

    .small-box h3 {
        text-align: center !important;
    }

    .small-box p {
        margin-bottom: 6px !important;
    }

    @if($gs->header_bg)
        .main-header, .brand-link {
        background: {{$gs->header_bg}};
    }

    @endif
    @if($gs->header_text_color)
        .navbar-light .navbar-nav .nav-link, .brand-link {
        color: {{$gs->header_text_color}};
    }

    @endif
    @if($gs->sidemenu_bg)
        .main-sidebar {
        background: {{$gs->sidemenu_bg}};
    }

    @endif
    @if($gs->sidemenu_text_color)
    .sidebar a {
        color: {{$gs->sidemenu_text_color}}   !important;
    }

    .nav-item > .nav-link.active {
        color: {{$gs->sidemenu_bg}}   !important;
        background: {{$gs->sidemenu_text_color}}   !important;
    }

    @endif
    .custom-select {
        background: none;
    }
    .card-header{
        text-transform: capitalize;
    }
    .w-5 {
        width: {{$gs->text_size}}px;
    }

    .h-5 {
        height: {{$gs->text_size}}px;
    }
</style>
<script>
    var myTable = '';
    var datatable_buttons = [
        {
            extend: 'excelHtml5',
            exportOptions: {
                columns: ':visible'
            }
        },
        // {
        //     extend: 'pdfHtml5',
        //     exportOptions: {
        //         columns: ':visible',
        //
        //     }
        // },
        'colvis'
    ];
</script>
