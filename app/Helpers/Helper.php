<?php 

namespace App\Helpers;

use File;
use App\Slike;

class Helper
{
    public static function filterZaKaraktere($str){
      $filtrirano = str_replace('-', '', $str);
      $filtrirano = str_replace(' ', '_', $filtrirano);
      $filtrirano = str_replace('#', '', $filtrirano);
      $filtrirano = str_replace('"', '', $filtrirano);
      $filtrirano = str_replace(';', '', $filtrirano);
      $filtrirano = str_replace(':', '', $filtrirano);
      $filtrirano = str_replace('š', 's', $filtrirano);
      $filtrirano = str_replace('Ž', 'z', $filtrirano);
      $filtrirano = str_replace('č', 'c', $filtrirano);
      return $filtrirano;
    }

    public static function dodajSliku($proizvod){
      $imeSlike = time() . '_' . str_replace(' ', '_', $_FILES["slika"]["name"]);
      $imgTnmName = $_FILES["slika"]["tmp_name"];
      $imagePath = 'images/';
      $tmpDir = Helper::filterZaKaraktere($proizvod->naziv);
      $ext = strtolower(pathinfo($imeSlike, PATHINFO_EXTENSION));
      $path = public_path() . '/' . $imagePath . $tmpDir;
      File::makeDirectory($path, $mode = 0777, true, true);
      
      $dozvoljeni = ['jpg', 'jpeg', 'png', 'bmp', 'tiff'];
      
      if ($imgTnmName === '')
        return redirect(route('proizvodDetaljnije', $proizvod))->withErrors(['poruka' => 'Niste izabrali sliku!', 'bojaStatus' => 'danger']);
      
      if(!in_array($ext, $dozvoljeni))
        return back()->withErrors(['poruka' => 'Pogrešan format slike ili fajl nije slika, dozvoljeni formati su: jpg, jpeg, png, bmp i tiff!', 'bojaStatus' => 'danger']);
        
      $completed = move_uploaded_file($imgTnmName, $path . '/' . $imeSlike);  // nisam upisao direktno u IF radi testiranja setovanje $completed na false
      // $completed = false;

      if (!$completed)
        return back()->withErrors(['poruka' => 'Došlo je do greške prilikom uploada slike, pokušajte ponovo!', 'bojaStatus' => 'danger']);
      
      Slike::insert(['proizvod_id' =>  $proizvod->id , 'slika' => $tmpDir . '/' . $imeSlike]);
      return redirect(route('proizvodDetaljnije', $proizvod))->withErrors(['poruka' => 'Slika je uspešno dodata.', 'bojaStatus' => 'success']);

  }
}