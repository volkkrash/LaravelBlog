<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    protected $fillable = [
      'title', 'subtitle', 'description', 'sort'
    ];

    /**
     * Static 
     * 
     * @return 
     */
    public static function getData() {
      
      return static::where('active', 1)->orderBy("sort")->get();
    }


}
