<?php
$user = auth()->user();
?>
@extends('backend.layouts.master')

@section('content')

    @if($user->hasRole(1))
        <h3 class="mb-3">Partner Dashboard</h3>
        <div class="row">
            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Total Number Of Partners</p>
                                <p class="fs-30 mb-2 total-loading" id="total_partners"></p>
                                <p><span class=" total-loading" id="total_partners_ratio"></span>% (30 days)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Total New Partners Today</p>
                                <p class="fs-30 mb-2 total-loading" id="total_partners_today"></p>
                                <p><span class=" total-loading" id="total_partners_today_ratio"></span>% (30 days)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Amount Of New Partners This Week</p>
                                <p class="fs-30 mb-2 total-loading" id="total_assets_week">total_assets_week</p>
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
                                <p class="mb-4">Total Number Of New Partners This Month</p>
                                <p class="fs-30 mb-2 total-loading" id="total_partners_month"></p>
                                <p><span class=" total-loading" id="total_partners_month_ratio"></span>% (30 days)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Average Amount Of Clients Per Partner</p>
                                <p class="fs-30 mb-2 total-loading" id="total_assets_avg"></p>
                                <p><span class=" total-loading" id="total_assets_avg_ratio"></span>% (30 days)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Top Partner By Number Of Client</p>
                                <p class="fs-30 mb-2 total-loading" id="total_partners_top"></p>
                                <p><span class=" total-loading" id="total_partners_top_ratio"></span>% (30 days)</p>
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
                                <p class="mb-4">Top Partner By Total Amount Of Client Assets</p>
                                <p class="fs-30 mb-2 total-loading" id="total_assets"></p>
                                <p><span class=" total-loading" id="total_assets_ratio"></span>% (30 days)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($user->hasRole(2))

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome {{$user->name}}</h3>
                        <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Current Number Of Clients</p>
                                <p class="fs-30 mb-2 total-loading" id="total_clients">4006</p>
                                <p><span class=" total-loading" id="total_clients_ratio"></span>% (30 days)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Amount Of Crypto Contract Assets</p>
                                <p class="fs-30 mb-2 total-loading" id="total_client_assets">61344</p>
                                <p><span class=" total-loading" id="total_client_assets_ratio"></span>% (30 days)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="new-wrapper">
            <h3 class="mb-3">Crypto News</h3>
            <iframe width="100%" height="500px" src="https://rss.app/embed/v1/carousel/6ObZTc6S7AylfHZt" frameborder="0"></iframe>
            <!--<div class="card-columns" id="crypto_news">-->

            <!--</div>-->
        </div>
    @endif

    @if($user->hasRole(3))
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome {{$user->name}}</h3>
                        <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                    </div>
                </div>
            </div>
        </div>

        @foreach(\App\Models\ClientContractAsset::where('client_id',$user->id)
                            ->where('status','approved')
                            ->latest()->get() as $record)
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">{{$record->contractAsset->name}}</p>
                            <p class="font-weight-500">{{$record->description}}</p>
                            <div class="d-flex justify flex-wrap mb-5">
                                <div class="me-5 mt-3">
                                    <p class="text-muted">Starting Value</p>
                                    <h3 class="text-primary fs-30 font-weight-medium">{{$record->initial_amount}}</h3>
                                </div>
                                <div class="me-5 mt-3">
                                    <p class="text-muted">Maturity Value</p>
                                    <h3 class="text-primary fs-30 font-weight-medium">{{$record->crypto_value_at_maturity}}</h3>
                                </div>
                                <div class="me-5 mt-3">
                                    <p class="text-muted">APY</p>
                                    <h3 class="text-primary fs-30 font-weight-medium">{{$record->guaranteed_rate}}%</h3>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted">Accumulation</p>
                                    <h3 class="text-primary fs-30 font-weight-medium">{{$record->calcAccumulation()}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@stop

@section('js')
    <script>
        $('.total-loading').html('<span class="fa fa-spinner fa-spin"></span>')
        $(function () {
            @if($user->hasRole(2))
            // $.ajax({
            //     url: 'https://newsapi.org/v2/top-headlines?q=crypto&amp;language=en&apiKey=66bcc9e496484640a948864fc2375414',
            //     success: function (r) {
            //         $.each(r.articles, function (index, value) {
            //             if (index < 3) {
            //                 $('#crypto_news').append('   <div class="card"> <img class="card-img-top" src="' + value.urlToImage + '" style="height: 220px" alt="Card image cap"> <div class="card-body"> <h4 class="card-title mt-3">' + value.title + '</h4> <p class="card-text">' + value.description + '</p> <a class="btn btn-primary" href="' + value.url + '" target="_blank">Read More</a> </div> </div>')
            //             }
            //         });
            //     }
            // })
            @endif
            $.ajax({
                url: '{{url('dashboard-metas')}}',
                data: {
                    partner_meta: 1
                },
                success: function (r) {
                    @if($user->hasRole(1))
                    $('#total_partners').html(r.total_partners)
                    $('#total_partners_ratio').html(r.total_partners_ratio)

                    $('#total_partners_today').html(r.total_partners_today)
                    $('#total_partners_today_ratio').html(r.total_partners_today_ratio)

                    $('#total_partners_top').html(r.total_partners_top)
                    $('#total_partners_top_ratio').html(r.total_partners_top_ratio)

                    $('#total_partners_month').html(r.total_partners_month)
                    $('#total_partners_month_ratio').html(r.total_partners_month_ratio)

                    $('#total_assets_week').html(r.total_assets_week)
                    $('#total_assets_week_ratio').html(r.total_assets_week_ratio)

                    $('#total_assets_avg').html(r.total_assets_avg)
                    $('#total_assets_avg_ratio').html(r.total_assets_avg_ratio)

                    $('#total_assets').html(r.total_assets)
                    $('#total_assets_ratio').html(r.total_assets_ratio)
                    @endif
                    @if($user->hasRole(2))
                    $('#total_clients').html(r.total_clients)
                    $('#total_clients_ratio').html(r.total_clients_ratio)
                    $('#total_client_assets').html(r.total_client_assets)
                    $('#total_client_assets_ratio').html(r.total_client_assets_ratio)
                    @endif
                }
            })
        })
    </script>
@stop
