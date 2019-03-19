<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryWork extends Model
{
    protected $fillable = [
    	'name', 'slug'
    ];

    public function posts()
    {
    	return $this->hasMany(Work::class);
    }
}
