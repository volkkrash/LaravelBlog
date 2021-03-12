<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $fillable = [
        'title', 'parent_id', 'slug', 'sort'
    ];

    public function children() {
        return $this->hasMany(self::class, 'parent_id');
    }
}
