<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;

class AdvertisementGallery extends Model
{
    protected $table = Constants::ADVERTISEMENT_GALLERY_DB;
    protected $fillable = ['advertisement_id', 'image', 'created_at'];
    public $timestamps = false;
}