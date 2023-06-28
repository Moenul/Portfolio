<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_id',
        'service_intro',
        'article_intro',
        'contact_intro',
        'footer_intro'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
