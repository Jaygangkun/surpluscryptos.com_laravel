<?php
$user = auth()->user();
?>
@extends('backend.layouts.master')
@section('css')

@stop

@section('content')
    <h3 class="mb-3">{{$title}}</h3>
    <div class="row">
        @forelse($records as $record)
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <a href="{{$url.'/'.$record->id}}">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">{{$record->contractAsset->name}}</p>
                                <p class="font-weight-500">{{$record->description}}</p>
                                <div class="d-flex justify flex-wrap mb-5">
                                    <div class="me-5 mt-3">
                                        <p class="text-muted">Date</p>
                                        <h3 class="text-primary fs-30 font-weight-medium">{{date('m/d/Y',strtotime($record->created_at))}}</h3>
                                    </div>

                                    <div class="me-5 mt-3">
                                        <p class="text-muted">Amount</p>
                                        <h3 class="text-primary fs-30 font-weight-medium">{{$record->initial_amount}}</h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @empty
            <div class="col-md-12 grid-margin stretch-card">
                <p>No reports available...</p>
            </div>
        @endforelse

    </div>
@stop
@section('js')
    <script>

    </script>
@stop

