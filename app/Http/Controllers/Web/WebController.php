<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view("web.home");
    }
    public function about()
    {
        return view("web.about");
    }
    public function contact()
    {
        return view("web.contact");
    }
}