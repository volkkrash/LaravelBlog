<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class PageBlockThreeCard extends Model
{
    
    protected $fillable = [
        'title', 'subtitle', 'picture', 'page_id', 'active'
    ];

    public function deleteFile($filePath) {
        if(!is_null($filePath)) {
            $filePath = str_replace('uploads/', '', $filePath);
            if(Storage::exists($filePath)) {
                Storage::delete($filePath);
            }
        }
    }
}
