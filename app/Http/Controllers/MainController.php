<?php

namespace App\Http\Controllers;

use App\User;
use App\Stavke;
use App\Fakture;
use App\Proizvod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index(){
        return view('korpa');
    }

    public function json_response(){
        return response()->json(Proizvod::with('slike')->orderBy('created_at', 'desc')->get());
    }

    public function show($id){
        $proizvodi = Proizvod::with('slike')
                ->where('id', $id)
                ->orderBy('created_at', 'desc')->get();
        return view('detaljnije', compact('proizvodi'));
    }

    public function create(Request $request){
        try {
            DB::beginTransaction();
                $faktura = $this->insertFaktura($request);
                $narudzbenica_br = $this->formatiranjeNarudzbenice($faktura);
                $ukupnaSuma = $this->insertStavke($request, $faktura);

                // update fakture ukupnom sumom fakture i brojem narudžbenice
                $faktura->update(['narudzbenica_br' => $narudzbenica_br, 'ukup_suma' => $ukupnaSuma]);

            DB::commit();
                return json_encode(['msg' =>"Narudžbina je uspešno poslata!", 'boja' => 'zeleno']);

        } catch (\Exception $e) {
            
            DB::rollback();
                return json_encode(['msg' => 'Došlo je do greške, pokušajte ponovo!', 'boja' => 'crveno']);
                // return json_encode(['msg' => "Došlo je do greške! " . $e->getMessage(), 'boja' => 'crveno']);
        }
    }

    public function insertFaktura($request){
        $user = User::with('details')->findOrFail($request->user_id);

        $faktura = new Fakture;
        // iz JS stiže
        $faktura->user_id = $request->user_id;
        $faktura->napomena_user = htmlspecialchars($request->napomena_user);
        // stiže iz baze
        $faktura->name = $user->name;
        $faktura->first_name = $user->details->first_name ?? 'Nije upisano';
        $faktura->last_name = $user->details->last_name ?? 'Nije upisano';
        $faktura->address = $user->details->address ?? 'Nije upisano';
        $faktura->zip = $user->details->zip ?? '0';
        $faktura->city = $user->details->city ?? 'Nije upisano';
        $faktura->state = $user->details->state ?? 'Nije upisano';
        $faktura->save();

        return $faktura;
    }

    // formatiranje broja narudžbenice
    public function formatiranjeNarudzbenice($faktura){
        $narudzbenica_br = date("Y") . '-' . date("m") . '-'; //. $faktura->id;
        
        $tmpLen = strlen($faktura->id);
        while ($tmpLen < 5){
            $narudzbenica_br .= '0'; 
            $tmpLen++;
        }
        $narudzbenica_br .= $faktura->id;

        return $narudzbenica_br;
    }

    public function insertStavke($request, $faktura) {
        $ukupnaSuma = 0;
        foreach($request->stavke as $item){
            $proizvod = Proizvod::findOrFail($item['id']);

            $stavka = new Stavke;
            $stavka->fakture_id = $faktura->id;
            // podaci iz korpe
            $stavka->proizvod_id = $item['id'];
            $stavka->gaziste = $request->gaziste;
            $stavka->pojedinacna_cena = $item['cena'];
            $stavka->kolicina = $item['kolicina'];
            $stavka->ukupna_cena = $item['kolicina'] * $item['cena'];
            // podaci iz baze proizvoda
            $stavka->naziv_proizvoda = $proizvod->naziv;
            $stavka->boja = $proizvod->boja;
            $stavka->save();

            $ukupnaSuma += $stavka->ukupna_cena;
        }
        return round($ukupnaSuma, 2);
    }
}
