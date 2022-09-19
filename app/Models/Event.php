<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = [
        'event_start',
        'event_end',
        'published_at',
        'published_end'
    ];

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
            return '<span class="badge bg-gradient-secondary">Draft</span>';
        }
        return '<span class="badge bg-gradient-success">Aktif</span>';
    }

    public function getStatusEventLabelAttribute()
    {
        switch ($this->status_event) {
            case 0:
                return '<span class="badge bg-gradient-secondary">Coming Soon</span>';
                break;
            case 1:
                return '<span class="badge bg-gradient-success">Pendaftaran</span>';
                break;
            case 2:
                return '<span class="badge bg-gradient-primary">Event On Going</span>';
                break;
            case 3:
                return '<span class="badge bg-gradient-danger">Event Selesai</span>';
                break;
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
