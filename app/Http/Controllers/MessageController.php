<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //clase request importada por defecto
use Illuminate\Support\Facades\Mail;
Use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store(Request $request)
    {
         
                //validar formulario
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3',
        ],[
            'name.required' =>__('I need your name')
        ]);
       
        Mail::to('jorge@aprendible.com')->queue(new MessageReceived($message));

        return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24 horas.');
        //return $request;//->get('name');
    }
   
}
