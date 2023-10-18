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
        $homePage = HomePage::first();
        if (!$homePage) {
            $homePage = HomePage::create(homePageInputs());
        }
        return view("admin.pages.home", ['homePage' => $homePage]);
    }
    public function home_page_store(HomePageRequest $request)
    {
        $homePage = HomePage::first();
        if ($homePage) {
            $homePage->update(array_merge($request->validated()));
            uploadImage($homePage, 'first_slide_image');
            uploadImage($homePage, 'second_slide_image');
            uploadImage($homePage, 'third_slide_image');
            uploadImage($homePage, 'green_nature_image');
            uploadImage($homePage, 'first_writing_image');
            uploadImage($homePage, 'second_writing_image');
            uploadImage($homePage, 'third_writing_image');
            uploadImage($homePage, 'subcscribe_bcgk_img');
        }
        return view("admin.pages.home", ['homePage' => $homePage]);
    }
}
