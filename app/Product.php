<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];
    protected $appends = ['cost'];

    public function getCostAttribute()
    {
        return $this->price - ($this->price * $this->discount / 100);
    }

	public function images()
	{
		return $this->morphMany(Image::class, 'owner');
	}

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }

    public function uploadAndStoreNewImages($images)
    {
        foreach ($images as $image_from_request) {
            $image = new Image;
            $image->owner_type = self::class;
            $image->owner_id = $this->id;
            $image->path = upload($image_from_request);
            $image->save();
        }
    }
}
