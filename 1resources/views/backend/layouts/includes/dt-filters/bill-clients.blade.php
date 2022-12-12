<div class="col-sm-2">
    <div class="form-group">
        <label>Bill To</label>
        <select id="bill_client_id" name="bill_client_id"
                class="form-control dt-filter select2">
            <option value="" selected>All</option>
            @foreach(\App\Models\BillClient::all() as $r)
                <option value="{{$r->id}}">{{$r->name}}</option>
            @endforeach
        </select>
    </div>
</div>
