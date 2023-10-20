<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutPageRequest;
use App\Models\AboutPage;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about_page()
    {
        $aboutPage = AboutPage::first();
        if (!$aboutPage) {
            $aboutPage = AboutPage::create(aboutPageInputs());
        }
        return view("admin.pages.about", ['aboutPage' => $aboutPage]);
    }
    public function about_page_store(AboutPageRequest $request)
    {
        $aboutPage = AboutPage::first();
        if ($aboutPage) {
            $aboutPage->update(array_merge($request->validated()));
            uploadImage($aboutPage, 'upper_slide_bckg_img');
            uploadImage($aboutPage, 'middle_section_image');
        }
        return view("admin.pages.about", ['aboutPage' => $aboutPage]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
