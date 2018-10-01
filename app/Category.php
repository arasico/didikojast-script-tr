<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = Constants::CATEGORY_DB;
    protected $fillable = ['url', 'title', 'images', 'description', 'updated_at', 'created_at', 'type_row'];
    public $timestamps = false;
}