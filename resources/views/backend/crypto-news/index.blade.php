@foreach($records as $record)
    {{--    @if(str_contains($record->title,'crypto'))--}}
    <div class="card">
        <img class="card-img-top" src="{{$record->urlToImage}}" style="height: 220px" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title mt-3">{{$record->title}}</h4>
            <p class="card-text">{!! $record->description !!}</p>
            <a class="btn btn-primary" href="{{$record->url}}" target="_blank">Read More</a>
        </div>
    </div>
    {{--    @endif--}}
@endforeach
