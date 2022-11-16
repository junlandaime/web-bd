<?php

namespace App\Models;

use Illuminate\Support\Str;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];
    // protected $dates = [
    //     'tanggal_lahir'
    // ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function profil()
    {
        return $this->hasMany(ProfileMember::class, 'email', 'email');
    }

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
            return '<span class="badge bg-gradient-secondary">Non Active</span>';
        }
        return '<span class="badge bg-gradient-success">Active</span>';
    }

}
