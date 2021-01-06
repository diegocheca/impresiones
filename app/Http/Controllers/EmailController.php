<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\FirstEmail;



class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Nuevo Email desde laravel";
        $for = "diegochecarelli@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("trazabilidad.rsu@gmail.com","Impresiones CUI CUI");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
     public function hola(){
     	echo "hola";
     }
     public function sendEmail() {

        $to_email = "diegochecarelli@gmail.com";

        Mail::to($to_email)->send(new FirstEmail);

        return "<p> Success! Your E-mail has been sent.</p>";

    }
}
