<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Category;
use App\Car;

class CarController extends Controller
{
    public function view(Request $request)
    {

        $service=\App\Service::where('id', $request->service_id)
        ->withTranslation(\App::getLocale())
        ->first();

    	$car=\App\Car::where('id', $request->id)
    	->withTranslation(\App::getLocale())
    	->first();

        $regions=\App\Region::withTranslation(\App::getLocale())->get();
        $bus=\App\DoublebusPrice::first();
        
    	return view('page_view', compact('car', 'service', 'regions', 'bus'));
    }

    public function bus(Request $request)
    {
        $service_id=$request->id;

        $service=\App\Service::where('id', $service_id)->withTranslation(\App::getLocale())->first();
    
        $car=\App\Car::withTranslation(\App::getLocale())->whereHas('services', function($query) use ($service_id){
            $query->where('services.id', '=', $service_id);
        })->first();
        $bus=\App\DoublebusPrice::first();

        return view('page_bus', compact('car', 'service', 'bus'));
    }

    public function sortCat()
    {
        $id=$_POST['id'];
    	$cars=\App\Car::where('category_id', $id)
        ->get();
    	$res=view('partials.sortCar', compact('cars'));
    	return $res;
    }


    public function sortCatService()
    {
        $id=$_POST['id'];
        $service_id=$_POST['service_id'];
        $service=\App\Service::find($service_id);
        $cars=\App\Car::where('category_id', $id)
        ->whereHas('services', function($query) use ($service_id){
            $query->where('services.id', '=', $service_id);
        })->withTranslation(\App::getLocale())->get();
        $res=view('partials.sortCarService', compact('cars', 'service'));
        return $res;
    }

    public function convertToRubl()
    {
        
        $sum=$_POST['sum'];
        $str=file_get_contents("http://cbu.uz/ru/arkhiv-kursov-valyut/json/");
        $json=json_decode($str, true);
        $res= $json[0]['Rate']* $sum;
        
        return $res."" ;
    }

    public function convertToDollar()
    {
        
        $sum=$_POST['sum'];
        return $sum."";
        $str=file_get_contents("http://cbu.uz/ru/arkhiv-kursov-valyut/json/");
        $json=json_decode($str, true);
    }


   
    public function searchCar()
    {

        $service_id=$_POST['service_id'];
        $category_id=$_POST['category_id'];
        $region_id=$_POST['region_id'];
       
      $cars = \App\Car::where('category_id', $category_id)
        ->whereHas('services', function($query) use ($service_id){
            $query->where('services.id', '=', $service_id);
        })
        ->whereHas('regions', function($query) use ($region_id){
            $query->where('regions.id', '=', $region_id);
        })->get();
        
        $service=\App\Service::find($service_id);

       $res=view('partials.search', compact('cars', 'service'));
       return $res;
    }

    
}
