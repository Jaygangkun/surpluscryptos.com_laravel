<div class="col-sm-2">
    <div class="form-group">
        <label>Plan Management</label>
        <select name="plan_manag_type" required class="form-control dt-filter"
                id="plan_manag_type">
            <option value="" selected>All</option>
            @foreach(\App\Models\PlanManagementType::all() as $v)
                <option value="{{$v->id}}">{{$v->title}}</option>
            @endforeach
        </select>
    </div>
</div>
