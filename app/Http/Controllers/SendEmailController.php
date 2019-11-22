<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function send(Request $request)
    {
     $validator = Validator::make($request->all(), [
        'ime' =>  'required',
        'prezime' =>  'required',
        'mail'  =>  'required|email',
        'poruka' =>  'required'
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        }

        $data = array(
            'ime' =>  $request->ime,
            'prezime' =>  $request->prezime,
            'poruka' =>   $request->poruka
        );

        // kome se šalje
        Mail::to('dmitic@gmail.com')->send(new SendMail($data));

        //za lokalizovano
        // Mail::to('dmitic@gmail.com')->locale('sr')->send(new SendMail($data));
        return redirect('/#contact')->with('poslat', 'Vaš mail je poslat, hvala što ste nas kontaktirali!');
    }
}
