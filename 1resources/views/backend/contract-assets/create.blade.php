@extends('backend.layouts.master')
@section('css')

@stop
@section('content')
    <h3 class="mb-3 text-center">New {{$title}} </h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <form action="{{$url}}" method="POST" class="pt-0">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Contract Name" required name="name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" placeholder="Write Description" name="description">
                </div>

                <div class="mb-3">
                    <label class="form-label">Guaranteed Rate %</label>
                    <input type="number" step="any" class="form-control" placeholder="30" name="guaranteed_rate">
                </div>

                <div class="mb-3">
                    <label class="form-label">Terms (Years)</label>
                    <select required name="years" class="form-control">
                        @foreach([3,5,7,10] as $year)
                            <option>{{$year}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Minimum Amount</label>
                    <input type="number" step="any" required class="form-control" placeholder="10" name="min_amount">
                </div>

                <div class="mb-3">
                    <label class="form-label">Maximum Amount</label>
                    <input type="number" step="any" class="form-control" placeholder="1000" name="max_amount">
                </div>

                <div class="mb-3">
                    <label class="form-label">Available Commission Percentage</label>
                    <input type="number" step="any" class="form-control" placeholder="20" name="commission_percent">
                </div>

                <div class="nextBtnCtrl text-center mt-5">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>


            </form>
        </div>
    </div>
@stop
@section('js')

@stop

