<?php

namespace App\Http\Controllers;

use App\Models\AdomanyNev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdomanyNevController extends Controller
{
    public function index()
    {
        return AdomanyNev::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nev' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Hibaüzenet' => 'Valamelyik kötelező adat hiányzik'],401);
        }

        $adomanynev = AdomanyNev::create($request->all());

        return response()->json(['Név: ' => $adomanynev->nev],204);
    }

    public function update(Request $request, $id)
    {
        $adomanynev = AdomanyNev::find($id);

        if (is_null($adomanynev)) {
            return response()->json(['Hiba' => 'Nem létezik adomány név ilyen ID-val'],404);
        }

        $validator = Validator::make($request->all(), [
            'nev' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Hiba' => 'Valamelyik kötelező adat hiányzik'],401);
        }

        $adomanynev->update($request->all());

        return response()->json(['Siker' => 'Adomány név frissítve'],200);
    }

    public function destroy($id)
    {
        $adomanynev = AdomanyNev::find($id);

        if (is_null($adomanynev)) {
            return response()->json(['Hiba' => 'Nem létezik adomány név ilyen ID-val'],404);
        }

        $adomanynev->delete();

        return response()->json(['Siker' => 'Adomány törölve'],200);
    }

    public function getById($id)
    {
        $adomanynev = AdomanyNev::find($id);

        if (is_null($adomanynev)) {
            return response()->json(['Hiba' => 'Nincs ilyen ID-jű adomány'],404);
        }

        return response()->json($adomanynev, 200);
    }
}
