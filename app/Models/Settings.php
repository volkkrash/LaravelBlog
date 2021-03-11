<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public $fillable = ['header_logo', 'footer_logo'];

    public $file;
    public $colName;
    public $fileExt;
    public $fileName;
    public $filePath;

    protected $default = [
        'header_logo' => 'assets/images/logo/logo-white.png',
        'footer_logo' => 'assets/images/logo/logo-black.png'
    ];


    public function storeFile($file, $colName) {
        $this->file = $file;
        $this->colName = $colName;

        $this->fileExt = $this->file->extension();
        $this->fileName = $this->colName.'_logo.'.$this->fileExt;
        $this->filePath = $this->file->storeAs("images/logos", $this->fileName);
        
        
        return $this->filePath;
        
    }



}
