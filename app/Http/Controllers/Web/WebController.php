<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\HomePage;
use App\Models\ServicePage;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $homePage = HomePage::first();
        return view("web.home", ["homePage" => $homePage]);
    }
    public function about()
    {
        $aboutPage = AboutPage::first();
        return view("web.about", ["aboutPage" => $aboutPage]);    }
    public function contact()
    {
        $contactPage = ContactPage::first();
        return view("web.contact", ["contactPage" => $contactPage]);    }
    public function service()
    {
        $servicePage = ServicePage::first();
        return view("web.service", ["servicePage" => $servicePage]);
    }
    public function blog()
    {
        return view("web.blog");
    }
    public function qa()
    {
        return view("web.qa");
    }
}
