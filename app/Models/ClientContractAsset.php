<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientContractAsset extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id')->withTrashed();
    }

    public function partner()
    {
        return $this->belongsTo(User::class, 'partner_id')->withTrashed();
    }

    public function contractAsset()
    {
        return $this->belongsTo(ContractAsset::class, 'contract_asset_id')->withTrashed();
    }

    public function calcAccumulation()
    {
        $result = 0;
        if ($this->status == 'approved') {
            $created_date = date('Y-m-d', strtotime($this->created_at));
            $starting_date = date('Y-m-d', strtotime($created_date . '+46 days'));
            $today = date('Y-m-d');
            if ($starting_date < $today) {
                $diff = date_diff(date_create($starting_date), date_create($today));
                $days = $diff->format("%a");
                $accumulation = round(($this->initial_amount * ($this->guaranteed_rate / 100)) / 365, 2);
                $result = round($days * $accumulation, 2);
//                $result=$accumulation;
            }
        }
        return $result;
    }

}
