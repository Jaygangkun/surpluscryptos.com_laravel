<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function logoPath()
    {
        return asset('img/' . $this->logo);
    }

    public function faviconPath()
    {
        return asset('img/' . $this->favicon);
    }


}
