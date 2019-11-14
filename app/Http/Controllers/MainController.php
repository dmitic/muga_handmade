<?php

namespace App\Http\Controllers;

use App\User;
use App\Stavke;
use App\Fakture;
use App\Proizvod;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function korpa(){
        return view('korpa');
    }

    public function json_response(){
        return response()->json(Proizvod::with('slike')->orderBy('created_at', 'desc')->get());
    }

    public function show($id){
        $proizvodi = Proizvod::with('slike')
                ->where('id', $id)
                ->orderBy('created_at', 'desc')->get();
        // return json_encode($proizvodi);
        return view('detaljnije', compact('proizvodi'));
    }

    public function getDataUser(Request $request){
        $user = User::with('details')->find($request->user_id);

        $faktura = new Fakture;
        
        // iz JS stiže
        $faktura->user_id = $request->user_id;
        $faktura->ukup_suma = $request->ukup_suma;
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
        // return $faktura;

        // ubacivanje br narudžbenice
        $narudzbenica_br = date("Y") . '-' . date("m") . '-'; //. $faktura->id;
        switch (strlen($faktura->id)){
            case 1:
                $narudzbenica_br .= '0000' . $faktura->id;
            break;
            case 2:
                $narudzbenica_br .= '000' . $faktura->id;
            break;
            case 3:
                $narudzbenica_br .= '00' . $faktura->id;
            break;
            case 4:
                $narudzbenica_br .= '0' . $faktura->id;
            break;
            default:
            $narudzbenica_br .= $faktura->id;
        }
        
        // return $narudzbenica_br;


        $faktura->update(['narudzbenica_br' => $narudzbenica_br]);

        return $faktura->id;
    }

    public function getDataStavke(Request $request){
        // return $request->user_id;
        $proizvod = Proizvod::find($request->proizvod_id);
        
        $stavka = new Stavke;
        // podaci iz korpe
        $stavka->fakture_id = $request->fakture_id;
        $stavka->proizvod_id = $request->proizvod_id;
        $stavka->gaziste = $request->gaziste;
        $stavka->pojedinacna_cena = $request->cena;
        $stavka->kolicina = $request->kolicina;
        $stavka->ukupna_cena = $request->kolicina * $request->cena;
        
        // podaci iz baze proizvoda
        $stavka->naziv_proizvoda = $proizvod->naziv;
        $stavka->boja = $proizvod->boja;
        $stavka->save();

        return json_encode(['msg' =>"Narudžbina je uspešno poslata!", 'boja' => 'zeleno']);
    }
}
