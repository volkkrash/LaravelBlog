<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Settings;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index() {
        $settings = Settings::find(1);

        return view('admin.settings.site-settings.index', compact('settings'));
    }

    public function update(Request $request) {

        $request->validate([
            'footer_logo' => 'nullable|image',
            'header_logo' => 'nullable|image',
        ]);
        
        $settings = Settings::find(1);

        if($request->hasFile('header_logo') && $request->file('header_logo')->isValid()) {
            $file = $request->file('header_logo');
            
            $settings->header_logo = 'uploads/'.$settings->storeFile($file, 'header');
        }
        if($request->hasFile('footer_logo') && $request->file('footer_logo')->isValid()) {
            $file = $request->file('footer_logo');
            
            $settings->footer_logo = 'uploads/'.$settings->storeFile($file, 'footer');
            
        }
        $settings->save();
        
        return back()->with('success', 'Data is updated!');
    }
}
