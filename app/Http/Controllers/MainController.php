<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    //

    public function index(){

        // $response=$this->mailing();
    	return view('admin/index');
    }

    public function mailing()
    {
        $from="emmanuel@nkwconsulting.com";
        $to="emmanuel@nkwconsulting.com";
        $name="Emmanuel ZANMENOU";
        $subject="Prise de Contact avec upcompany";
        $message="Bonjour ! 
        J'envoie ce mail afin de prendre contact avec les dirigeant de la société upcompany.
        Merci de bien vouloir me revenir le plus tôt possible";
        
        $data=[
            'name'=>$name,
            'subject'=>$subject,
            'email'=>$from,
            'phone'=>66587101,
            'message'=>$message,
        ];

        // Mail::send('admin.email.contact',['data' =>$data] ,function($email) use($from,$name,$subject){
        //     $email->to('emmanuel@upcompany.co');
        //     $email->subject("Upcompany Site Web-".$subject);
        // });
        $when = now()->addMinutes(4);
        Mail::to($to,$name)->later($when,new ContactMail($data));
        return response(['status' =>true]);
    }
}
