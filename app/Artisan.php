<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artisan extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    protected $appends = ['full_name', 'city', 'activity'];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getCityAttribute()
    {
        return $this->city_instance->name ?? null;
    }

    public function getActivityAttribute()
    {
        return $this->activity_type == 1 ? __('handcroft') : __('souvenirs');
    }

    public function city_instance()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
