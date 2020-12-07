<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'text',
    ];

    public function backgrounds()
    {
        return $this->belongsToMany('App\Models\Background');
    }

    public function logos()
    {
        return $this->belongsToMany('App\Models\Logo');
    }
}
