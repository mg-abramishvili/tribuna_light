<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    public function slides()
    {
        return $this->belongsToMany('App\Models\Slide');
    }
}
