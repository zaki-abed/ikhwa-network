<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function partners()
    {
        return view('site.partners');
    }

    public function privacy()
    {
        return view('site.privacy-policy');
    }

    public function terms()
    {
        return view('site.terms-conditions');
    }

    public function careers()
    {
        return view('site.jobs');
    }
}
