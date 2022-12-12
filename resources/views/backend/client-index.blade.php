@extends('backend.layouts.master')

@section('content')
    <h3 class="mb-3">Client Dashboard</h3>
    <div class="row">
        <div class="col-md-12 grid-margin transparent">
            <div class="row">
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Total Number Of Clients</p>
                            <p class="fs-30 mb-2 total-loading" id="total_clients"></p>
                            <p><span class=" total-loading" id="total_clients_ratio"></span>% (30 days)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Total New Clients Today</p>
                            <p class="fs-30 mb-2 total-loading" id="total_clients_today"></p>
                            <p><span class=" total-loading" id="total_clients_today_ratio"></span>% (30 days)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Total Amount Of New Clients This Week</p>
                            <p class="fs-30 mb-2 total-loading" id="total_assets_week"></p>
                            <p><span class=" total-loading" id="total_assets_week_ratio"></span>% (30 days)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin transparent">
            <div class="row">
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Total Number Of New Clients This Month</p>
                            <p class="fs-30 mb-2 total-loading" id="total_clients_month"></p>
                            <p><span class=" total-loading" id="total_clients_month_ratio"></span>% (30 days)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Total Amount Of Crypto Contract Assets</p>
                            <p class="fs-30 mb-2 total-loading" id="total_assets"></p>
                            <p><span class=" total-loading" id="total_assets_ratio"></span>% (30 days)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Total Clients Under Specific Assets</p>
                            <p class="fs-30 mb-2 total-loading" id="total_assets_client"></p>
                            <p><span class=" total-loading" id="total_assets_client_ratio"></span>% (30 days)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('js')
    <script>
        $('.total-loading').html('<span class="fa fa-spinner fa-spin"></span>')
        $(function () {
            $.ajax({
                url: '{{url('dashboard-metas')}}',
                data: {
                    client_meta: 1
                },
                success: function (r) {
                    $('#total_clients').html(r.total_clients)
                    $('#total_clients_ratio').html(r.total_clients_ratio)

                    $('#total_clients_today').html(r.total_clients_today)
                    $('#total_clients_today_ratio').html(r.total_clients_today_ratio)

                    $('#total_partners_top').html(r.total_partners_top)
                    $('#total_partners_top_ratio').html(r.total_partners_top_ratio)

                    $('#total_clients_month').html(r.total_clients_month)
                    $('#total_clients_month_ratio').html(r.total_clients_month_ratio)

                    $('#total_assets_client').html(r.total_assets_client)
                    $('#total_assets_client_ratio').html(r.total_assets_client_ratio)

                    $('#total_assets_week').html(r.total_assets_week)
                    $('#total_assets_week_ratio').html(r.total_assets_week_ratio)

                    $('#total_assets').html(r.total_assets)
                    $('#total_assets_ratio').html(r.total_assets_ratio)
                }
            })
        })
    </script>
@stop
