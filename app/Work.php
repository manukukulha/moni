<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
    	'name', 'slug', 'file', 'category_id'
    ];

    public function category(){
		return $this->belongsTo(CategoryWork::class);
	}
}
