<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicePageRequest;
use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service_page()
    {
        $servicePage = ServicePage::first();
        if (!$servicePage) {
            $servicePage = ServicePage::create(['upper_slide_title' => '', 'upper_slide_description' => '', 'middle_section_title' => '', 'middle_section_excerpt' => '', 'middle_section_content' => '', 'middle_section_video' => '']);
        }
        return view("admin.pages.service", ['servicePage' => $servicePage]);
    }
    public function service_page_store(ServicePageRequest $request)
    {
        $servicePage = ServicePage::first();
        if ($servicePage) {
            $path = uploadVideo('middle_section_video', $request);
            $servicePage->update(array_merge($request->validated(), ['middle_section_video' => $path]));
            uploadImage($servicePage, 'upper_slide_bckg_img');
        }
        return view("admin.pages.service", ['servicePage' => $servicePage]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.service.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.service.create");
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
