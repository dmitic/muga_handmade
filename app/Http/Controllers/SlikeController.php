<?php

namespace App\Http\Controllers;

use Helper;
use App\Slike;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

class SlikeController extends Controller
{
    protected $guarded = [];



    public function destroy(Slike $slika){

        $tmp = explode('/' ,$slika->slika);
        $tmpDir = Helper::filterZaKaraktere($tmp[0]);
        $directory = public_path() . '\images\\' . $tmpDir;

        if(file_exists('images/' . $slika->slika))
            unlink('images/' . $slika->slika);
        $slika->delete();

        $FileSystem = new Filesystem();
        if ($FileSystem->exists($directory)) {
            $files = $FileSystem->files($directory);
            if (empty($files)) {
                $FileSystem->deleteDirectory($directory);
            }
        }

        return back()->withErrors(['poruka' => 'Slika je uspešno obrisana.', 'bojaStatus' => 'success']);
    }
}
