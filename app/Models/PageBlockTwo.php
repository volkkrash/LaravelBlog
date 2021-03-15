<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PageBlockTwo extends Model
{

    protected $table = 'page_block_two';
    protected $fillable = [
        'title', 'description', 'picture'
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
