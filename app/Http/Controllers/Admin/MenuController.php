<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Menu;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('admin.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create', [
            'menu' => [],
            'menuItems' => Menu::with('children')->where('parent_id', NULL)->get(),
            'delimiter' => '',
        ]);
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
                    'slug' => 'required',
                    'sort' => 'required|integer',
                ]
            );

            Menu::create($request->except('_token'));
            
            // if(is_null(Menu::where('slug', '=', $request->slug)->first())) {
                
            //     Menu::create($request->except('_token'));
            // } else {
            //     return back()->withErrors('The slug should be unique!');
            // }
            
        
            return redirect()->route('menu.index')->with('success', 'Success!');
        
        
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
        $menu = Menu::all();
        $item = Menu::find($id);
        return view('admin.menu.edit', compact('menu', 'item'));
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
        if(count($request->all()) > 2) {
            $request->validate(
                [
                    'title' => 'required',
                    'slug' => 'required',
                    'sort' => 'required|integer',
                ]
            );

            // $item = Menu::where('slug', '=', $request->slug)->first();
            
            // if(!is_null($item) && $item->id != intval($id)) {
            //     return back()->withErrors('The slug should be unique!');
            // } 
            $menuItem = Menu::find($id);
            $data = $request->except('_token', '_method');
            $menuItem->update($data);

            return redirect()->route('menu.index')->with('success', 'Success!');
        } else {
            return back()->withErrors('Failed to find that resource');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuItem = Menu::find($id);
        $menuItem->delete();

        return redirect()->route('menu.index')->with('success', 'Success!');
    }
}
