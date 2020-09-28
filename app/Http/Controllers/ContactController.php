<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;
use App\Message;
use App\Http\Requests\Applyrequest;
use App\Http\Requests\Contact;



class ContactController extends Controller
{
    public function apply()
    {
    	$name=$_POST['name'];
        $number=$_POST['number'];

    	Apply::create([
    		'name'=>$name,
    		'number'=>$number
    	]);

        
        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $message=<<<TEXT
        Yangi murojat:
        Phone: {$number},
        Name: {$name}
TEXT;

        $data = [
            'chat_id' => '-1001499900393',
            'text' => $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

    	
    }

    public function contact(Contact $request)
    {

        Message::create([
            'name'=>$request->name,
            'number'=>$request->number,
            'message'=>$request->message,
        ]);

        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $message=<<<TEXT
        Yangi murojat:
        Name: {$request->name},
        Phone: {$request->number}
        Message: {$request->message}
TEXT;

        $data = [
            'chat_id' => '-1001499900393',
            'text' => $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        session()->flash('msg', 'Received successfully!');
        return back();
    }


    public function apply3()
    {
        $name=$_POST['name'];
        $number=$_POST['number'];
        $message=$_POST['message'];
        $email=$_POST['email'];

        Apply::create([
            'name'=>$name,
            'number'=>$number,
            'message'=>$message,
            'email'=>$email,
        ]);

        
        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $message=<<<TEXT
        Yangi murojat:
        Phone: {$number},
        Name: {$name},
        Email: {$email},
        Message: {$message}
TEXT;

        $data = [
            'chat_id' => '-1001499900393',
            'text' => $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

        
    }

    public function apply_comment()
    {
        $name=$_POST['name'];
        $body=$_POST['body'];
     
        \App\Comment::create([
            'name'=>$name,
            'body'=>$body,
        ]);
        
        $apiToken = "768420781:AAEzzh0nDnr3o067TNOBnafxm1QTe4fbilo";
        $message=<<<TEXT
        Fikr qoldirildi:
        Name: {$name},
        Body: {$body},
TEXT;

        $data = [
            'chat_id' => '-1001499900393',
            'text' => $message
        ];

        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) ); 
    }
   
}
