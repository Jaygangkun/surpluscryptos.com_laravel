<?php
$user = auth()->user();
?>

@extends('backend.layouts.master')
@section('css')

@stop

@section('content')
    <h3 class="mb-3">{{$title}}</h3>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="table-sorter-wrapper col-lg-12 table-responsive">
                            <table id="sortable-table-2" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>File Name</th>
                                    <th>File Type</th>
                                    <th>File Size</th>
                                    <th>Download</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>{{$record->file_name}}</td>
                                        <td>{{$record->file_type}}</td>
                                        <td>{{round($record->file_size/1024,2)}} KB</td>
                                        <td>
                                            @if($record->file)
                                                <a
                                                    href="{{asset('images/marketing-materials/'.$record->file)}}"
                                                    target="_blank"
                                                    class="btn btn-outline-info btn-sm">Download</a>
                                            @endif
                                            @if($record->video_link)
                                                <a
                                                    href="{{$record->video_link}}"
                                                    target="_blank"
                                                    class="btn btn-outline-info btn-sm">Watch</a>
                                            @endif
                                            @if($user->hasRole(1))
                                                <a data-href="{{$url.'/'.$record->id}}" href="javascript:"
                                                   class="btn btn-outline-danger  btn-sm delete-btn">Delete</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($user->hasRole(1))
        <div class="">
            <a href="{{$url.'/create'}}" class="btn btn-primary">Add New</a>
        </div>
    @endif
@stop
@section('js')
    <script>
    </script>
@stop

