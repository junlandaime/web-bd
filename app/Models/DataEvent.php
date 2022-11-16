<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataEvent extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = [
        'meet_time'
    ];
    
    public function arsip()
    {
        return $this->belongsTo(ArsipEvent::class);
    }
}
