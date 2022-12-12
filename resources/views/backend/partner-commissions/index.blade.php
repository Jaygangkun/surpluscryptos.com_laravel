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
                                    <th class="sortStyle">Partner Name</th>
                                    <th class="sortStyle">Client Name</th>
                                    <th class="sortStyle">Commission Amount</th>
                                    <th class="sortStyle">Date Paid</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>{{$record->partner->name}}</td>
                                        <td>{{$record->client->name}}</td>
                                        <td>{{$record->partner_commission}}</td>
                                        <td>
                                            @if($user->hasRole(1))
                                                <input class="form-control form-control-sm comm-date-change" type="date"
                                                       data-id="{{$record->id}}"
                                                       style="width: 150px"
                                                       value="{{$record->partner_commission_paid_at}}">
                                            @else
                                                {{$record->partner_commission_paid_at? date('d-m-y',strtotime($record->partner_commission_paid_at)):''}}
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

@stop
@section('js')
    <script>
        @if($user->hasRole(1))
        $(document).on('change', '.comm-date-change', function (e) {
            e.preventDefault();
            // if (confirm("You won't be able to revert this!")) {
            $.ajax({
                method: 'POST',
                url: '{{$url}}',
                data: {
                    id: $(this).data('id'),
                    partner_commission_paid: 1,
                    partner_commission_paid_at: $(this).val(),
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    alert('{{$title}} has been done')
                },
                error: function (response) {
                    alert(response.responseJSON ? response.responseJSON.message : 'something went wrong');
                }
            })
            // }
        })
        @endif

    </script>
@stop

