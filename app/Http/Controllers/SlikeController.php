<?php

namespace App\Http\Controllers;

use App\Slike;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

class SlikeController extends Controller
{
    protected $guarded = [];



    public function destroy(Slike $slika){

        
        // targetiranje direktorijuma.
        $tmp = explode('/' ,$slika->slika);
        $tmpDir = $this->filterZaKaraktere($tmp[0]);
        $directory = public_path() . '\images\\' . $tmpDir;

        if(file_exists('images/' . $slika->slika))
            unlink('images/' . $slika->slika);
        $slika->delete();

        $FileSystem = new Filesystem();
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

        return back()->withErrors(['poruka' => 'Slika je uspešno obrisana.']);
    }

    public function filterZaKaraktere($str){

        $filtrirano = str_replace('-', '', $str);
        $filtrirano = str_replace(' ', '_', $filtrirano);
        $filtrirano = str_replace('#', '', $filtrirano);
        $filtrirano = str_replace('"', '', $filtrirano);
        $filtrirano = str_replace('š', 's', $filtrirano);
        $filtrirano = str_replace('Ž', 'z', $filtrirano);
        $filtrirano = str_replace('č', 'c', $filtrirano);

        return $filtrirano;

    }
}
