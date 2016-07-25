<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CatagoriesController extends Controller
{
    public function about()
    {
        return view('main.about');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function articles()
    {
    	return view('main.catagories.articles');
    }

    public function campaigns()
    {
    	return view('main.catagories.campaigns');
    }

    public function files()
    {
    	return view('main.catagories.files');
    }

    public function legalsupport()
    {
    	return view('main.catagories.legalsupport');
    }

    public function newsfeed()
    {
    	return view('main.catagories.newsfeed');
    }

    public function newsletters()
    {
    	return view('main.catagories.newsletters');
    }

    public function releases()
    {
    	return view('main.catagories.releases');
    }

    public function reports()
    {
    	return view('main.catagories.reports');
    }

}
