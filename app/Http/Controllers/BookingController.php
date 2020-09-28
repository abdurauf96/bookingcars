<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\DoubleBus;
use App\Http\Requests\Booking;
use App\Car;
use App\RentCar;
use App\GidCar;
use App\Transfer;
use App\Cortage;
use App\Direction;
use App\Region;
use App\ZayafkiHelicopter;

class BookingController extends Controller
{
    
    public function zakazat_cortage(Request $request)
    {
       
        $message=<<<TEXT
        Zayafka qoldirildi!

        Сервис: Свадебный ВИП кортеж
        Дата: {$request->date}
        Пакет: {$request->package}
        Цена: {$request->itogo} $
        Имя: {$request->name}
        Номер телефона: {$request->number}
TEXT;

        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $data = [
            'chat_id' => '-1001499900393',
            'text' => $message
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        session()->flash('msg', 'Ваша заявка отправлена!');
        return back();
    }
    

     public function booking(Booking $request)
    {
        //dd($request);
        $from=Region::find($request->otkuda);
        $to=Region::find($request->kuda);
        $service=Service::where('keyy', $request->service)->first();
        $car=Car::where('id', $request->car_id)->first();
        
        if ($request->service=='cortage') {
        $gorod=\App\Region::find($request->gorod_arendi);
        $cortage=new Cortage();
        $cortage->service=$service->title;
        $cortage->car=$car->name;
        $cortage->city=$gorod->region;
        $cortage->date=$request->den_arendi;
        $cortage->from=$request->from;
        $cortage->to=$request->to;
        $cortage->summa=$request->hidden."$";
        $cortage->name=$request->name;
        $cortage->number=$request->number;
        $cortage->email=$request->service;
        $cortage->region=$request->region;
        $cortage->save();

        $message=<<<TEXT
        Yangi murojat:
        Service: {$service->title},
        Машина: {$car->name},
        Город аренды: {$gorod->region}
        День аренды: {$request->den_arendi}
        С: {$request->from}
        По: {$request->to}
        сумма: { $request->hidden }$
        Name: {$request->name}
        number: {$request->number}
        email: {$request->email}
        Region: {$request->region}
TEXT;
         } 

        if ($request->service=='direction') {
           
        $direction=new Direction();   
        $direction->car=$car->name;
        $direction->date=$request->date;
        $direction->destination=$request->marshrut;
        $direction->summa=$request->itogo."$";
        $direction->name=$request->name;
        $direction->number=$request->number;
        $direction->email=$request->email;
        $direction->region=$request->region;
        $direction->save();

        $message=<<<TEXT
        Yangi murojat:
        Service: {$service->title},
        Машина: {$car->name},
        Маршрут: {$request->marshrut}
        Дата аренды: {$request->date}
        сумма: {$request->itogo}$
        Name: {$request->name}
        number: {$request->number}
        email: {$request->email}
        Region: {$request->region}
TEXT;
         } 

        if ($request->service=='doublebus') {
        
        $doublebus=new DoubleBus();
        $doublebus->car=$car->name;
        $doublebus->date=$request->date;
        $doublebus->time=$request->time;
        $doublebus->childs=$request->bolalar;
        $doublebus->youngs=$request->yoshlar;
       
        $doublebus->all_peoples=$request->peoples;
        $doublebus->summa=$request->hidden."$";
        $doublebus->name=$request->name;
        $doublebus->number=$request->number;
        $doublebus->email=$request->service;
        $doublebus->region=$request->region;
        $doublebus->save();
        $message=<<<TEXT
        Yangi murojat:
        Сервис: {$service->title},
        Машина: {$car->name},
        Дата: {$request->date}
        Время:{$request->time} 
        Дети:{$request->bolalar}
        ВЗРОСЛЫЕ:{$request->yoshlar}
        Итого люди:{$request->peoples}
        Обшая сумма: {$request->hidden}$ 
        Name: {$request->name}
        number: {$request->number}
        email: {$request->email}
        Region: {$request->region}
TEXT;
        } 

        if ($request->service=='gidcars') {
        $gidcars=new GidCar();
        $gidcars->service=$service->title;
        $gidcars->car=$car->name;
        $gidcars->city=$request->otkuda;
        $gidcars->from=$request->gid_from;
        $gidcars->to=$request->gid_to;
        $gidcars->date=$request->den_arendi;
        $gidcars->language_gid=$request->lang;
        $gidcars->summa=$car->price_for_gidcar;
        $gidcars->name=$request->name;
        $gidcars->number=$request->number;
        $gidcars->email=$request->email;
        $gidcars->region=$request->region;
        $gidcars->save();

        $message=<<<TEXT
        Yangi murojat:
        Service: {$service->title},
        Машина: {$car->name},
        Город: { $request->otkuda }
        с: {$request->gid_from}
        по:{$request->gid_to} 
        
        Язык гида:{$request->lang}
       	Обшая сумма: {$car->price_for_gidcar} 
        Name: {$request->name}
        number: {$request->number}
        email: {$request->email}
        Region: {$request->region}
TEXT;
        } 

        if ($request->service=='rent') {
           
         $region=\App\Region::find($request->gde);
        $rentcar=new RentCar();
        $rentcar->service=$service->title;
        $rentcar->car=$car->name;
        $rentcar->from=$request->otkuda;
        $rentcar->in=$region->region;
        $rentcar->date_in=$request->den_arendi;
        $rentcar->date_out=$request->den_sdachi;
        $rentcar->time_in=$request->intime;
        $rentcar->time_out=$request->outtime;
        $rentcar->chair_children=$request->chair_num;
        $rentcar->summa=$request->hidden."$";
        $rentcar->name=$request->name;
        $rentcar->number=$request->number;
        $rentcar->email=$request->email;
        $rentcar->region=$request->region;
        $rentcar->save();

        $message=<<<TEXT
        Yangi murojat:
        Service: {$service->title},
        Машина: {$car->name},
        Город аренды: {$request->otkuda}
        Город сдачи машины: {$request->gde}
        день аренды: {$request->den_arendi}
        день сдачи: {$request->den_sdachi}
        от какого времени:{$request->intime} 
        до какого времени:{$request->outtime}
        детские кресла:{$request->chair_num}
        обшая сумма: {$request->hidden}$ 
        Name: {$request->name}
        number: {$request->number}
        email: {$request->email}
        Region: {$request->region}
TEXT;
        } 

        if ($request->service=='transfer') {
        $transfer=new transfer();
        $transfer->service=$service->title;
        $transfer->car=$car->name;
        $transfer->from=$request->otkuda;
        $transfer->to=$request->kuda;
        $transfer->date=$request->date;
        $transfer->time=$request->time;
        $transfer->quantity_people=$request->passajiri;
        $transfer->summa=$request->summa;
        $transfer->name=$request->name;
        $transfer->number=$request->number;
        $transfer->email=$request->service;
        $transfer->region=$request->region;
        $transfer->save();


        $message=<<<TEXT
        Yangi murojat:
        Service: {$service->title},
        Машина: {$car->name},
        Откуда: {$request->otkuda}
        Куда: {$request->kuda}
        Дата прилета или вылета: {$request->date}
        Время:{$request->time} 
        Число пассажиров:{$request->passajiri}
       	обшая сумма: {$request->summa}
        Name: {$request->name}
        number: {$request->number}
        email: {$request->email}
        Region: {$request->region}
TEXT;
        }

        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $data = [
            'chat_id' => '-1001499900393',
            'text' => $message
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        session()->flash('msg', 'Received successfully!');
        return back();
       
    }
}
