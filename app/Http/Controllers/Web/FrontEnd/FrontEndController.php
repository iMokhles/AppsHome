<?php

namespace App\Http\Controllers\Web\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function home() {
        return view('frontend.site.home');
    }
    public function features() {
        return view('frontend.site.features');
    }
    public function pricing() {
        return view('frontend.site.pricing');
    }
    public function contact() {
        return view('frontend.site.contact');
    }
    public function about() {
        return view('frontend.site.about');
    }
}
