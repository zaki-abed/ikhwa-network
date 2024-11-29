<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {

        return view('site.home', [
            'pageTitle' => __('site.head.title.home'),
            'author' => __('site.head.author'),
            'metaDescription' => __('site.head.meta.description.homePage'),
            'metaKeywords' => __('site.head.meta.keywords.homePage')
        ]);
    }

    public function partners()
    {
        return view('site.partners', [
            'pageTitle' => __('site.head.title.partners'),
            'author' => __('site.head.author'),
            'metaDescription' => __('site.head.meta.description.partnersPage'),
            'metaKeywords' => __('site.head.meta.keywords.partnersPage')
        ]);
    }

    public function privacy()
    {
        return view('site.privacy-policy', [
            'pageTitle' => __('site.head.title.privacyPolicy'),
            'author' => __('site.head.author'),
            'metaDescription' => __('site.head.meta.description.privacyPage'),
            'metaKeywords' => __('site.head.meta.keywords.privacyPage')
        ]);
    }

    public function terms()
    {
        return view('site.terms-conditions', [
            'pageTitle' => __('site.head.title.termsConditions'),
            'author' => __('site.head.author'),
            'metaDescription' => __('site.head.meta.description.termsPage'),
            'metaKeywords' => __('site.head.meta.keywords.termsPage')
        ]);
    }

    public function careers()
    {
        return view('site.jobs', [
            'pageTitle' => __('site.head.title.jobs'),
            'author' => __('site.head.author'),
            'metaDescription' => __('site.head.meta.description.jobsPage'),
            'metaKeywords' => __('site.head.meta.keywords.jobsPage')
        ]);
    }
}
