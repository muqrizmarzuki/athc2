<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function homeTwo()
    {
        return view('pages.home_home_two');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function caseStudy()
    {
        return view('pages.case_study');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function career()
    {
        return view('pages.career');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function contact()
    {
        return view('pages.contact_us');
    }

    public function blog()
    {
        return view('pages.blog');
    }
}
