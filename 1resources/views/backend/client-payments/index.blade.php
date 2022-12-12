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
                                    <th>Client Name</th>
                                    <th>Contract</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{$loop->iteration }}</td>
                                        <td>{{$record->client->name}}</td>
                                        <td>{{$record->contractAsset->name}}</td>
                                        <td>{{$record->initial_amount}}</td>
                                        <td>
                                            <select data-id="{{$record->id}}" class="status-change">
                                                @foreach(['pending','approved'] as $status)
                                                    <option @if($record->status==$status) selected
                                                            @endif value="{{$status}}">{{ucfirst($status)}}</option>
                                                @endforeach
                                            </select>
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
        $(document).on('change', '.status-change', function (e) {
            e.preventDefault();
            // if (confirm("You won't be able to revert this!")) {
                $.ajax({
                    method: 'POST',
                    url: '{{$url}}',
                    data: {
                        id: $(this).data('id'),
                        status_changed: $(this).val(),
                        status: $(this).val(),
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        alert('Payment Status has been changed')
                    },
                    error: function (response) {
                        alert(response.responseJSON ? response.responseJSON.message : 'something went wrong');
                    }
                })
            // }
        })
    </script>
@stop

