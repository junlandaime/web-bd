<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Member as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = [
        'tanggal_lahir'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
