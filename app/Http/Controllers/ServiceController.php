<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function view(Request $request)
    {
    	
    	$service=Service::where('id', $request->id)
    	->with('categories')
    	->first();
    	
        $service_id=$request->id;

        $cars=\App\Car::whereHas('services', function($query) use ($service_id){
            $query->where('services.id', '=', $service_id);
        })->withTranslation(\App::getLocale())->get();
    	
 	   	return view('page_service', compact('service', 'cars'));
    }

    public function cortages()
    {
    	
        $cortages=\App\CortageType::withTranslation(\App::getLocale())->get();
    	
    	return view('page_cortages', compact('cortages'));
    }

}
