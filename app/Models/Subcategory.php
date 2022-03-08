<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name','slug','image'
    ];

    public function image() {
        return $this->morphOne(App\Models\Image::class, 'imageable');
    }
}
