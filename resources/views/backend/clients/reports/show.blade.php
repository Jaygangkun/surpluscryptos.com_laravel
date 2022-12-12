<?php
$user = auth()->user();
?>
@extends('backend.layouts.master')
@section('css')
@stop

@section('content')
    <h3 class="mb-3">Surplus CCA - DAO</h3>

    @include('backend.clients.reports.application')
@stop
@section('js')
    <script>
        $(function () {
            $('.show_initial_amount').html('{{$record->initial_amount}}')
            $('.show_years').html('{{$record->years}}')
            $('.show_months').html('{{$record->years*12}}')
        })
    </script>
@stop

