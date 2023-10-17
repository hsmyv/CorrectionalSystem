<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomePageRequest;
use App\Models\HomePage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_page()
    {
        return view("admin.pages.home");
    }
    public function home_page_store(HomePageRequest $request)
    {
        $homePage = HomePage::findOrFail(1);
        if ($homePage) {
            $homePage->update(array_merge($request->validated()));
            uploadImage($homePage, 'first_slide_image', $request);
            uploadImage($homePage, 'second_slide_image', $request);
            uploadImage($homePage, 'third_slide_image', $request);
            uploadImage($homePage, 'green_nature_image', $request);
            uploadImage($homePage, 'first_writing_image', $request);
            uploadImage($homePage, 'second_writing_image', $request);
            uploadImage($homePage, 'third_writing_image', $request);
            uploadImage($homePage, 'subcscribe_bcgk_img', $request);
        } else {
            $homePage = HomePage::create(array_merge($request->validated()));
            uploadImage($homePage, 'first_slide_image', $request);
            uploadImage($homePage, 'second_slide_image', $request);
            uploadImage($homePage, 'third_slide_image', $request);
            uploadImage($homePage, 'green_nature_image', $request);
            uploadImage($homePage, 'first_writing_image', $request);
            uploadImage($homePage, 'second_writing_image', $request);
            uploadImage($homePage, 'third_writing_image', $request);
            uploadImage($homePage, 'subcscribe_bcgk_img', $request);
        }
        return view("admin.pages.home");
    }
}
