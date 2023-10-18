<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogPageRequest;
use App\Models\BlogPage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog_page()
    {
        $blogPage = BlogPage::first();
        if (!$blogPage) {
            $blogPage = BlogPage::create(['upper_slide_title' => '', 'upper_slide_description' => '']);
        }
        return view("admin.pages.blog", ['blogPage' => $blogPage]);
    }
    public function blog_page_store(BlogPageRequest $request)
    {
        $blogPage = BlogPage::first();
        if ($blogPage) {
            $blogPage->update(array_merge($request->validated()));
            uploadImage($blogPage, 'upper_slide_bckg_img');
        }
        return view("admin.pages.blog", ['blogPage' => $blogPage]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.post.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.post.create");
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
