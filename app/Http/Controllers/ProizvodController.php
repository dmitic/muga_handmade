<?php

namespace App\Http\Controllers;

use File;
use App\Slike;
use App\Proizvod;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

class ProizvodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('testUserRole');
    }
    
    public function index(){
        $proizvodi = Proizvod::with('slike')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.proizvodi', compact('proizvodi'));
    }

    public function show(Proizvod $proizvod){
        return view('admin.detailsProizvodi', compact('proizvod'));
    }

    public function edit(Proizvod $proizvod){
        return view('admin.editProizvoda', compact('proizvod'));
    }

    public function create(Proizvod $proizvod){
        // snimanje/update proizvoda u bazu i validacija
        $proizvod = Proizvod::updateOrCreate(['id' => $proizvod->id], request()->validate([
            'naziv' => 'required|max:255',
            'tip_obuce' => 'required|max:255',
            'materijali' => 'required|max:255',
            'djon' => 'required|max:255',
            'boja' => 'required|max:255',
            'sezona' => 'required|max:255',
            'postava' => 'required|max:255',
            'pol' => 'required|max:255',
            'opis' => 'string|nullable|max:1000',
            'napomena' => 'string|nullable|max:1000',
            'cena' => 'required|max:10',
        ]));

        return $this->dodajSliku($proizvod)
                    ->withErrors(['poruka' => 'Proizvod je uspešno dodat/izmenjen.']);
    }

    public function dodajSlikuPojedinacno(Proizvod $proizvod){
        return $this->dodajSliku($proizvod)
                    ->withErrors(['poruka' => 'Slika je uspešno dodata.']);
    }

    public function destroy(Proizvod $proizvod){
        // brisanje slika za obrisani proizvod
        $slike = Slike::where('proizvod_id', $proizvod->id)->get();
        foreach($slike as $slika){
            if(file_exists('images/' . $slika->slika))
                unlink('images/' . $slika->slika);
        }
        // brisanje proizvoda
        $proizvod->delete();

        // brisanje praznog foldera
        $FileSystem = new Filesystem();
        $tmp = $this->filterZaKaraktere($proizvod->naziv);
        $directory = public_path() . '\images\\' . $tmp;
        if ($FileSystem->exists($directory)) {
            $files = $FileSystem->files($directory);
            if (empty($files))
                $FileSystem->deleteDirectory($directory);
        }
        return redirect('/admin/proizvodi')
                    ->withErrors(['poruka' => 'Proizvod je obrisan!']);
    }

    public function search(){
        $str = htmlspecialchars($_GET['str']); 

        $proizvodi = Proizvod::with('slike')
            ->where('naziv', 'like', '%' . $str . '%')
            ->orWhere('tip_obuce', 'like', '%' . $str . '%')
            ->orWhere('materijali', 'like', '%' . $str . '%')
            ->orWhere('pol', 'like', '%' . $str . '%')
            ->orWhere('boja', 'like', '%' . $str . '%')
            ->orWhere('sezona', 'like', '%' . $str . '%')
            ->orWhere('postava', 'like', '%' . $str . '%')
            ->orWhere('napomena', 'like', '%' . $str . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.proizvodi', compact('proizvodi'));
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

    public function dodajSliku($proizvod){
        $imeSlike = time() . '_' . str_replace(' ', '_', $_FILES["slika"]["name"]);
        $imgTnmName = $_FILES["slika"]["tmp_name"];
        $imagePath = 'images/';
        $tmpDir = $this->filterZaKaratere($proizvod->naziv);

        $path = public_path() . '/' . $imagePath . $tmpDir;
        File::makeDirectory($path, $mode = 0777, true, true);

        if($imgTnmName !== '') {
            Slike::insert(['proizvod_id' =>  $proizvod->id , 'slika' => $tmpDir . '/' . $imeSlike]);
            move_uploaded_file($imgTnmName, $path . '/' . $imeSlike);
        }
        return redirect(route('proizvodDetaljnije', $proizvod));
    }
}