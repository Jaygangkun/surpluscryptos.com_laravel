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
                                    <th class="sortStyle">Partner Name</th>
                                    <th class="sortStyle">Partner Number</th>
                                    <th class="sortStyle">Start Date</th>
                                    <th class="sortStyle">Number Of Clients</th>
                                    <th class="sortStyle">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>{{$record->name}}</td>
                                        <td>{{$record->partner_number}}</td>
                                        <td>{{date('d-m-y',strtotime($record->created_at))}}</td>
                                        <td>{{$record->myClients->count()}}</td>
                                        <td>
                                            <a href="{{$url.'/'.$record->id.'/edit'}}" class="btn btn-primary btn-sm"><i
                                                    class="ti-pencil"></i> Edit</a>
                                            <a data-href="{{$url.'/'.$record->id}}" href="javascript:"
                                               class="btn btn-danger text-white btn-sm delete-btn"><i
                                                    class="ti-trash"></i> Delete</a>
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

    <div class="">
        <a href="{{$url.'/create'}}" class="btn btn-primary">Add New</a>
    </div>
@stop
@section('js')
    <script>
    </script>
@stop

