<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PageBlockOne extends Model
{

  protected $table = 'page_block_one';

  protected $fillable = [
    'title', 'picture'
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
