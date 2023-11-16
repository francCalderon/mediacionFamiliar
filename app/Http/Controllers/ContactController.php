<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function showForm(){
        return view('inicio');
    }

    public function sendEmail(Request $request)
    {
        // $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[
        //     'secret' => env('RECAPTCHAV3_SECRET'),
        //     'response' => $request->input('g-recaptcha-response')
        // ])->object();

        // if($response->success && $response->score >= 0.7){
        //     return 'El usuario es real';
        // }else{
        //     return 'El usuario es robot';
        // }

        $data = $request->validate ([
            'nombre' => 'required|string|max:40',
            'correo' => 'required|string|max:25',
            'telefono' => 'required|string|max:11',
            'ciudad' => 'required|string|max:20',
            'mensaje' => 'required|string|max:200',
            'g-recaptcha-response' => ['required', new \App\Rules\Recaptcha]
        ]);

        try {
            Mail::to('abogadombm@gmail.com')
            ->cc('fco.sl93@gmail.com')
            ->send(new ContactFormMail($data));

            return redirect()->to('#seccion_contacto')->with('success', '¡Mensaje enviado correctamente!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.');
        }

    }
}

