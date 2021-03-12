<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialService extends Model
{

    public $fillable = [
        'name', 'link', 'company_contact_data_id', 'active', 'icon'
    ];

    public static function getData() {
        
        return SocialService::where('active', 1)->orderBy('id')->get();
    }
}
