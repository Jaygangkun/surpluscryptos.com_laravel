<div class="col-sm-2">
    <div class="form-group">
        <label>Status</label>
        <select name="employment_status" required class="form-control dt-filter"
                id="employment_status">
            <option value="" selected>All</option>
            @foreach(config('constants.active_inactive') as $v)
                <option value="{{$v}}">{{$v}}</option>
            @endforeach
        </select>
    </div>
</div>
