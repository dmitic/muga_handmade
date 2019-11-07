<?php

namespace App\Http\Controllers;

use App\Slike;
use Illuminate\Http\Request;

class SlikeController extends Controller
{
    protected $guarded = [];



    public function destroy(Slike $slika){
        if(file_exists('images/' . $slika->slika))
            unlink('images/' . $slika->slika);
        $slika->delete();
        return back();
    }
}
