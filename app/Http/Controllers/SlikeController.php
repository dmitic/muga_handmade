<?php

namespace App\Http\Controllers;

use App\Slike;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

class SlikeController extends Controller
{
    protected $guarded = [];



    public function destroy(Slike $slika){

        $FileSystem = new Filesystem();
        // targetiranje direktorijuma.
        $tmp = explode('/' ,$slika->slika);
        $directory = public_path() . '\images\\' . $tmp[0];
        
        if(file_exists('images/' . $slika->slika))
            unlink('images/' . $slika->slika);
        $slika->delete();

        // provera da li direktorijum postoji.
        if ($FileSystem->exists($directory)) {
            // ako ima fajlova smešta to u files.
            $files = $FileSystem->files($directory);
            // proverava da li je prazan
            if (empty($files)) {
                // ako jeste briše.
                $FileSystem->deleteDirectory($directory);
            }
        }

        return back();
    }
}
