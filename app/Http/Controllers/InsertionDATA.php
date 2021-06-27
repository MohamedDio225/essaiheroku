<?php

namespace App\Http\Controllers;

use App\Models\DonneUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertionDATA extends Controller
{
    public function InsererDonne(Request $request)
    {
        $query = DB::table('donne_users')
                    ->insert([
                        'NomUser'=>$request->nomutilisateur,
                        'PrenomUser'=>$request->prenomutilisateur,
                        
                        
                    ]);

        if ($query) {
           
            return redirect('/');
        }
    }

    public function Actualiser()
    {
        $Tousclient = DonneUser::all();
        return view('welcome',[
            'DonnerUser'=>$Tousclient
        ]);
    }
}
