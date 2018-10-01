<?php

namespace App;

use App\Inside\Constants;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = Constants::STATE_DB;
    protected $fillable = ['title', 'url', 'updated_at', 'created_at', 'type_row'];
    public $timestamps = false;
}