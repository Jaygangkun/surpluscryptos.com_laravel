@extends('backend.layouts.master')
@section('css')

@stop
@section('content')
    <h3 class="mb-3 text-center">Update {{$title}} </h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form action="{{$url.'/'.$record->id}}" method="POST" class="pt-0">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control"
                           value="{{$record->name}}"
                           placeholder="Contract Name" required name="name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text"                           value="{{$record->description}}"
                           class="form-control" placeholder="Write Description" name="description">
                </div>

                <div class="mb-3">
                    <label class="form-label">Guaranteed Rate %</label>
                    <input type="number"                           value="{{$record->guaranteed_rate}}"
                           step="any" class="form-control" placeholder="30" name="guaranteed_rate">
                </div>

                <div class="mb-3">
                    <label class="form-label">Terms (Years)</label>
                    <select required name="years" class="form-control">
                        @foreach([3,5,7,10] as $year)
                            <option @if($year==$record->years) selected @endif>{{$year}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Minimum Amount</label>
                    <input type="number"                           value="{{$record->min_amount}}"
                           step="any" required class="form-control" placeholder="10" name="min_amount">
                </div>

                <div class="mb-3">
                    <label class="form-label">Maximum Amount</label>
                    <input type="number"                           value="{{$record->max_amount}}"
                           step="any" class="form-control" placeholder="1000" name="max_amount">
                </div>

                <div class="mb-3">
                    <label class="form-label">Available Commission Percentage</label>
                    <input type="number"                            value="{{$record->commission_percent}}"
                           step="any" class="form-control" placeholder="20" name="commission_percent">
                </div>

                <div class="nextBtnCtrl text-center mt-5">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>
@stop
@section('js')

@stop

