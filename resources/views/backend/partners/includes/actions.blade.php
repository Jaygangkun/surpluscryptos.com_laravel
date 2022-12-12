<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        <span class="fas fa-list"></span>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
        @can('edit_product')
        <a class="dropdown-item" href="{{$url.'/'.$record->id.'/edit'}}">Edit</a>
        @endcan
        @can('delete_product')
        <a class="dropdown-item delete-btn" data-href="{{$url.'/'.$record->id}}" href="javascript:">Delete</a>
        @endcan
    </div>
</div>
