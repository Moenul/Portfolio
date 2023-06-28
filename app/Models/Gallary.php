<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_id',
        'gallary_desc',
         'gallary_link'
    ];


    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
