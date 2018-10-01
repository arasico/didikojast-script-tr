<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = Constants::ADVERTISEMENT_DB;
    protected $casts = [
        'info' => 'array',
    ];
    protected $fillable = ['user_id', 'type', 'name', 'phone', 'tell', 'email', 'address', 'title', 'url', 'description', 'category_id', 'state', 'city', 'publish_at', 'expire_at', 'updated_at', 'created_at', 'type_row'];
    public $timestamps = false;

    public function gallery()
    {
        return $this->hasOne(AdvertisementGallery::class, 'advertisement_id');
    }

    public function galleries()
    {
        return $this->hasMany(AdvertisementGallery::class, 'advertisement_id');
    }
}