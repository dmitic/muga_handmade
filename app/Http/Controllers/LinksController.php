<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function poverljivost(){
        return view('data-confidentiality');
    }

    public function returnPolicy(){
        return view('return-policy');
    }

    public function delivery(){
        return view('delivery');
    }

    public function termsOfUse(){
        return view('terms-of-use');
    }
}
