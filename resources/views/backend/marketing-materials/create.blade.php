@extends('backend.layouts.master')
@section('css')

@stop
@section('content')
    <h3 class="mb-3 text-center">New {{$title}} </h3>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">

            <form action="{{$url}}" method="POST" id="material-form" class="pt-0" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" required placeholder="File Name" name="file_name">
                </div>

                <div class="mb-3">
                    <label class="form-label">File</label>
                    <input type="file" class="form-control" name="file" id="file">
                </div>

                <div class="mb-3">
                    <label class="form-label">Video Link</label>
                    <input type="text" class="form-control" name="video_link" id="video_link">
                </div>

                <div class="nextBtnCtrl text-center mt-5">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>

            </form>

        </div>
    </div>
@stop
@section('js')
    <script>
        $('#material-form').on('submit', function (e) {
            e.preventDefault();
            if ($('#video_link').val() || $('#file').val()) {
                e.currentTarget.submit();
            } else {
                alert('Please upload file or video link');
            }
        })
    </script>
@stop

