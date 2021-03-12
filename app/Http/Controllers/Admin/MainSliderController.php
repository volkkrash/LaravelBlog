<?php

namespace App\Http\Controllers\Admin;

use App\Models\MainSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class MainSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderItems = MainSlider::paginate(10);
        return view('admin.slider.index', compact('sliderItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate(
            [
                'title' => 'required',
                'subtitle' => 'string',
                'description' => 'string',
                'sort' => 'required|integer',
                'picture' => 'required|image',
            ]
        );
        
        $sliderItem = new MainSlider;
        $sliderItem->title = $request->title;
        $sliderItem->subtitle = $request->subtitle;
        $sliderItem->description = $request->description;
        $sliderItem->sort = $request->sort;
        $sliderItem->active = $request->active ? true : false;
        

        if($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $folderName = Carbon::now()->toDateString();
            $picturePath = 'uploads/'.$picture->store("images/{$folderName}");
            $sliderItem->picture = $picturePath;
        }

        $sliderItem->save();
        
        return redirect()->route('main-slider.index')->with('success', 'Slide created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliderItem = MainSlider::findOrFail($id);
        return view('admin.slider.edit', compact('sliderItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required',
                'sort' => 'required|integer',
            ]
        );

        $data = $request->all();

        $dbItem = MainSlider::find($id);
        $dbItem->update($data);


        return redirect()->route('main-slider.index')->with('success', 'Slide updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dbItem = MainSlider::find($id);
        $picturePath = str_replace('uploads/', '', $dbItem->picture);
        Storage::delete($picturePath);
        $dbItem->delete();

        return redirect()->route('main-slider.index')->with('success', 'Slide deleted successfully!');
    }
}
