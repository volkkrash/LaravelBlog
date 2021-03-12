<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CompanyContactData;


class CompanyContactDataController extends Controller
{


    public function index() {
        $data = CompanyContactData::find(1);
        $socialsData = $data->socials()->get();

        return view('admin.settings.company.index', compact('data', 'socialsData'));
    }


    public function update(Request $request, $id=1) {

        $request->validate(
            [
                'company_address' => 'required',
                'company_email' => 'required',
                'company_phone' => 'required',
                'soc_1_icon' => 'nullable|image',
                'soc_2_icon' => 'nullable|image',
                'soc_3_icon' => 'nullable|image',
                'soc_4_icon' => 'nullable|image',
                'soc_5_icon' => 'nullable|image',
                'soc_6_icon' => 'nullable|image',
            ]
        );

        $data = $request->all();

        CompanyContactData::socialsUpdate($data);

        $contactData = CompanyContactData::find(1);
        $contactData->company_address = $data['company_address'];
        $contactData->company_email = $data['company_email'];
        $contactData->company_phone = $data['company_phone'];
        $contactData->save();

        return back()->with('success', 'Data is updated!');
    }
}
