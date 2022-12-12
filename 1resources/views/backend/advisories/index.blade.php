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
                                    <th class="sortStyle">Name</th>
                                    <th class="sortStyle">Email</th>
                                    <th class="sortStyle">Phone</th>
                                    <th class="sortStyle">Date Of Joining</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>{{$record->name}}</td>
                                        <td>{{$record->email}}</td>
                                        <td>{{$record->phone}}</td>
                                        <td>{{date('d-m-y',strtotime($record->created_at))}}</td>
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
@stop
@section('js')
    <script>
    </script>
@stop

