<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model {
    protected $fillable = ["title", "content", "image_url", "image_path", "salary_campaign"];

    public function setIsTrendingAttribute($value) {
        if ($value) {
            self::where("is_trending", true)->update(["is_trending" => false]);
        }

        $this->attributes["is_trending"] = $value;
    }
}
