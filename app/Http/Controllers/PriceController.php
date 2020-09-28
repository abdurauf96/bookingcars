<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function gidcars()
    {
        $from=$_POST['from'];
        $to=$_POST['to'];

        $marshrut=\App\Marshrut::whereIn('from', [$from, $to])
        ->whereIn('to', [$to, $from])
        ->first();
        return $marshrut->cost;
    }

    public function gidcars_chair()
    {
        $soni=$_POST['soni'];

        $chair=\App\Marshrut::first();

        $res=$soni*$chair->chair;
        return $res;
    }

    public function cortage()
    {
    	$gorod=$_POST['gorod'];

        $price=\App\PriceCortage::where('region', $gorod)
        ->first();
        return $price->price;
    }

    public function transfer()
    {
    	/*$from=$_POST['from'];
        $to=$_POST['to'];

        $marshrut=\App\Marshrut::whereIn('from', [$from, $to])
        ->whereIn('to', [$to, $from])
        ->first();
        return $marshrut;*/
    }

    public function direction()
    {
        $from=$_POST['from'];
        $to=$_POST['to'];

        $direction=\App\MarshrutDirection::whereIn('from', [$from, $to])
        ->whereIn('to', [$to, $from])
        ->first();
        return $direction;
    }

    public function rentCars()
    {
       /* $text=$_POST['text'];
        $chair=\App\RentPrice::first();
        return $chair->cost_for_chair;*/
    }
}
