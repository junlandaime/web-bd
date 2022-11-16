<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileMember extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = [
        'tanggal_lahir'
    ];
    
    public function arsip()
    {
        return $this->belongsTo(ArsipEvent::class, 'event_id');
    
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'email', 'email');
    }

    public function getGenderLabelAttribute()
    {
        if ($this->gender == 0) {
            return '<span class="badge bg-gradient-primary">Wanita</span>';
        }
        return '<span class="badge bg-gradient-success">Pria</span>';
    }

    public function getMarriageLabelAttribute()
    {
        if ($this->marriage_status == 0) {
            return '<span class="badge bg-gradient-warning">Belum Menikah</span>';
        }
        return '<span class="badge bg-gradient-success">Menikah</span>';
    }
}
