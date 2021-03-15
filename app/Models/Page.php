<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Page extends Model
{

    protected $defaultFilePath = '/uploads/default/card-icon.png';

    /**
     * Get first section content
     * 
     */
    public function pageBlockOne() {
        return $this->belongsTo(PageBlockOne::class);
    }

    /**
     * Get second section content
     * 
     */
    public function pageBlockTwo() {
        return $this->belongsTo(PageBlockTwo::class);
    }
    
    /**
     * Get third section content
     * 
     */
    public function pageBlockThreeCards() {
        return $this->hasMany(PageBlockThreeCard::class);
    }

    public function createCards($data) {
        
        foreach ($data as $k => $v) {
            $data[$k]["page_id"] = $this->id;
            if(isset($v["active"]) && $v["active"] == 'on') {
                $data[$k]["active"] = 1;
            } else {
                $data[$k]["active"] = 0;
            }
            $data[$k]["picture"] = $this->storeFile($v['picture']);
        }
        foreach ($data as $k => $v) {
            PageBlockThreeCard::create($v);
        }
    }


    public function createBlockOne($data) {
        
        $data["picture"] = $this->storeFile($data['picture']);
        
        $this->page_block_one_id = PageBlockOne::create($data)->id;
    }


    public function createBlockTwo($data) {
        
        $data["picture"] = $this->storeFile($data['picture']);
        
        $this->page_block_two_id = PageBlockTwo::create($data)->id;
    }

    public function updateBlockOne($data) {
        
        if(isset($data["picture"])) {
            $data["picture"] = $this->storeFile($data['picture'], $this->pageBlockOne->picture);
        }
        $this->pageBlockOne->update($data);
    }

    public function updateBlockTwo($data) {
        
        if(isset($data["picture"])) {
            $data["picture"] = $this->storeFile($data['picture'], $this->pageBlockTwo->picture);
        }
        $this->pageBlockTwo->update($data);
    }

    public function updateCards($data) {
        $obCards = PageBlockThreeCard::find(array_column($data, "id"));
        foreach ($data as $k => $v) {
            $data[$k]["page_id"] = $this->id;
            if(isset($v["active"]) && $v["active"] == 'on') {
                $data[$k]["active"] = 1;
            } else {
                $data[$k]["active"] = 0;
            }

            if(isset($v["picture"])) {
                $data[$k]["picture"] = $this->storeFile($v['picture'], $obCards[$k]->picture);
            }
        }
        foreach ($obCards as $k => $v) {
            $v->update($data[$k]);
        }
    }

    /**
     *  This method saves the file to storage
     * @var File $file
     * @var string $oldPath
     * 
     * @return string
     */
    public function storeFile($file, $oldPath = null) {
        if(!is_null($oldPath)) {
            $filePath = str_replace('uploads/', '', $oldPath);
            Storage::delete($filePath);
        }
        if(isset($file)) {
            $folderName = Carbon::now()->toDateString();
            $filePath = 'uploads/'.$file->store("images/{$folderName}");
        } else {
            $filePath = $this->defaultFilePath;
        }

        return $filePath;
    }

}
