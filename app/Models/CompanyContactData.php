<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use App\Models\SocialService;

class CompanyContactData extends Model
{

    public $fillable = [
        'company_address', 'company_phone', 'company_email'
    ];


    public static function getData() {
        
        return CompanyContactData::find(1);
    }

    public function socials() {
        
        return $this->hasMany(SocialService::class);
    }

    public static function socialsUpdate($data = null) {

        if(!is_null($data)) {
            $socials = [];
            foreach ($data as $key => $value) {
                if(preg_match('/^soc_/', $key)) {
                    $item = explode('_', $key);
                    $socials[$item[1]]['id'] = $item[1];
                    $socials[$item[1]][$item[2]] = $value;
                }
            }
            //dd($socials);
            foreach ($socials as $key => $value) {
                $service = SocialService::find($value['id']);
                $service->name = $value["name"];
                $service->link = $value["link"];
                $service->active = (isset($value["active"]));
                //dd($service->icon);
                if(isset($value['icon']) && !is_null($value['icon'])) {
                    Storage::delete($service->icon);
                    $folder = date('Y-m-d');
                    $iconSrc = $value['icon']->store("images/{$folder}");
                    $service->icon = $iconSrc;
                }
                //dd($service->icon);
                $service->save();
            }
            
        }
    }
}
