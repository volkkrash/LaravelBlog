<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(20);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string',

            'sectionOne.title' => 'required|string|max:50',
            'sectionOne.picture' => 'required|image',

            'sectionTwo.title' => 'required|string|max:50',
            'sectionTwo.description' => 'required|string',
            'sectionTwo.picture' => 'required|image',

            'cards.*.title' => 'required|string|max:30',
            'cards.*.subtitle' => 'required|string',
            'cards.*.picture' => 'required|image'
        ]);
        
        $formData = $request->all();
        
        $page = new Page;
        $page->title = $formData['title'];
        $page->slug = $formData['slug'];
        
        $page->createBlockOne($formData['sectionOne']);
        $page->createBlockTwo($formData['sectionTwo']);
        $page->save();

        $page->createCards($formData['cards']);

        return redirect()->route('pages.index')->with('success', 'Page successfully created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string',

            'sectionOne.title' => 'required|string|max:50',
            'sectionOne.picture' => 'image',

            'sectionTwo.title' => 'required|string|max:50',
            'sectionTwo.description' => 'required|string',
            'sectionTwo.picture' => 'image',

            'cards.*.title' => 'required|string|max:30',
            'cards.*.subtitle' => 'required|string',
            'cards.*.picture' => 'image'
        ]);

        $formData = $request->all();
        
        $page->title = $formData['title'];
        $page->slug = $formData['slug'];

        $page->updateBlockOne($formData['sectionOne']);
        $page->updateBlockTwo($formData['sectionTwo']);
        $page->updateCards($formData['cards']);
        $page->save();
        
        return redirect()->route('pages.index')->with('success', 'Page updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        foreach ($page->pageBlockThreeCards as $card) {
            $card->deleteFile($card->picture);
            $card->delete();
        }
        $page->pageBlockOne->deleteFile($page->pageBlockOne->picture);
        $page->pageBlockOne->delete();
        $page->pageBlockTwo->deleteFile($page->pageBlockTwo->picture);
        $page->pageBlockTwo->delete();
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Page updated successfully!');
    }
}
