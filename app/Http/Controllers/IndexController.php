<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
           

        $services=\App\Service::withTranslation(\App::getLocale())
        ->orderBy('id', 'desc')
        ->get();

        $categories=\App\Category::withTranslation(\App::getLocale())->get();

        $cars=\App\Car::withTranslation(\App::getLocale())->limit(8)->get();
        //$category=\App\Category::where('id', 1)->first();
        $questions=\App\Question::withTranslation(\App::getLocale())->get();

        $problems=\App\Problem::withTranslation(\App::getLocale())->get();

        $regions=\App\Region::withTranslation(\App::getLocale())->get();

        $sliders=\App\Slider::withTranslation(\App::getLocale())->get();
       

    	return view('page_index', compact('services', 'categories', 'cars', 'questions', 'problems', 'regions', 'sliders', 'partners'));
    }

    public function about()
    {
        $page=\App\Page::first();
        $questions=\App\Question::withTranslation(\App::getLocale())->get();

        $problems=\App\Problem::withTranslation(\App::getLocale())->get();

    	return view('page_about', compact('questions', 'problems', 'page'));
    }

    public function contact()
    {
    	return view('page_contact');
    }

    public function services()
    {
        $services=\App\Service::withTranslation(\App::getLocale())->get();
        return view('services', compact('services'));
    }
}
