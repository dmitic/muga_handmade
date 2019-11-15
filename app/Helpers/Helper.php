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

      $path = public_path() . '/' . $imagePath . $tmpDir;
      File::makeDirectory($path, $mode = 0777, true, true);

      if($imgTnmName !== '') {
          Slike::insert(['proizvod_id' =>  $proizvod->id , 'slika' => $tmpDir . '/' . $imeSlike]);
          move_uploaded_file($imgTnmName, $path . '/' . $imeSlike);
      }
      return redirect(route('proizvodDetaljnije', $proizvod));
  }
}