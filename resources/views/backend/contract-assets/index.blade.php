<?php
$user = auth()->user();
?>
@extends('backend.layouts.master')
@section('css')

@stop

@section('content')
    <h3 class="mb-3">{{$title}}</h3>

    <div class="row">
        @foreach($records as $record)
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">{{$record->name}}</p>
                        <p class="font-weight-500">{{$record->description}}</p>
                        <div class="d-flex justify flex-wrap mb-2">
                            <div class="me-5 mt-3">
                                <p class="text-muted">Guaranteed Rate</p>
                                <h3 class="text-primary fs-30 font-weight-medium">{{$record->guaranteed_rate}}</h3>
                            </div>
                            <div class="me-5 mt-3">
                                <p class="text-muted">Terms</p>
                                <h3 class="text-primary fs-30 font-weight-medium">{{$record->years}}</h3>
                            </div>
                            <div class="me-5 mt-3">
                                <p class="text-muted">Minimum</p>
                                <h3 class="text-primary fs-30 font-weight-medium">{{$record->min_amount}}</h3>
                            </div>
                            <div class="me-5  mt-3">
                                <p class="text-muted">Maximum</p>
                                <h3 class="text-primary fs-30 font-weight-medium">{{$record->max_amount}}</h3>
                            </div>

                            <div class="me-5 mt-3">
                                <p class="text-muted">Commission%</p>
                                <h3 class="text-primary fs-30 font-weight-medium">{{$record->commission_percent}}</h3>
                            </div>
                        </div>
                        <a href="{{$url.'/'.$record->id.'/edit'}}" class="btn btn-primary btn-sm"><i
                                class="ti-pencil"></i> Edit</a>
                        <a data-href="{{$url.'/'.$record->id}}" href="javascript:"
                           class="btn btn-danger text-white btn-sm delete-btn"><i class="ti-trash"></i> Delete</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
    <div class="">
        <a href="{{$url.'/create'}}" class="btn btn-primary">Add New</a>
    </div>
@stop
@section('js')
    <script>

    </script>
@stop

