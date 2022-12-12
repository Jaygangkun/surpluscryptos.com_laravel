<?php
$user = auth()->user();
?>
@extends('backend.layouts.master')
@section('css')

@stop

@section('content')
    <h3 class="mb-3">Available Crypto Contract Assets</h3>
    <div class="row">
        @foreach($records as $record)
            <div class="col-md-12 grid-margin stretch-card">
                <a href="{{$url.'/'.$record->id}}">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">{{$record->name}}</p>
                            <p class="font-weight-500">{{$record->description}}</p>
                            <div class="d-flex justify flex-wrap mb-2">
                                <div class="me-5 mt-3">
                                    <p class="text-muted">APY</p>
                                    <h3 class="text-primary fs-30 font-weight-medium">{{$record->guaranteed_rate}}</h3>
                                </div>
                                <div class="me-5 mt-3">
                                    <p class="text-muted">Max Term</p>
                                    <h3 class="text-primary fs-30 font-weight-medium">{{$record->years}}</h3>
                                </div>
                                <div class="me-5 mt-3">
                                    <p class="text-muted">Minimum</p>
                                    <h3 class="text-primary fs-30 font-weight-medium">
                                        ${{number_format($record->min_amount)}}</h3>
                                </div>
                                <div class="me-5  mt-3">
                                    <p class="text-muted">Maximum</p>
                                    <h3 class="text-primary fs-30 font-weight-medium">
                                        ${{number_format($record->max_amount)}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@stop
@section('js')
    <script>

    </script>
@stop

