<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArsipEvent extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $dates = [
        'event_time'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
    
    public function profil()
    {
        return $this->hasMany(ProfileMember::class, 'event_id');
    }
    public function data()
    {
        return $this->hasMany(DataEvent::class, 'event_id');
    }
}
