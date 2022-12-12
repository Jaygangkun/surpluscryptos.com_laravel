<div class="col-sm-2">
    <div class="form-group">
        <label>Status</label>
        <select name="inv_status" id="inv_status" class="form-control dt-filter">
            <option value="" selected >All</option>
            @foreach(config('constants.invoice_statuses') as $status )
                <option value="{{$status}}">{{$status}}</option>
            @endforeach
        </select>
    </div>
</div>
