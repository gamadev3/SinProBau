<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convention extends Model {
    protected $fillable = ["title", "type", "image_url", "image_path"];
}
