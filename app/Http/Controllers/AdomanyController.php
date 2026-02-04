<?php

namespace App\Http\Controllers;

use App\Models\Adomany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdomanyController extends Controller
{
    public function index()
    {
        return $adomanyok = Adomany::all();
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            'darabszam'=>'required'
        ]);

        if($validator->fails())
        {
            return response()->json(['Hibaüzenet'=>'Valamelyik kötelező adat hiányzik'],401);
        }

        $adomany=Adomany::create($request->all());
        return response()->json(['Adomány neve:'=>$adomany->adomanynev],204);
    }

    public function update(Request $request, $id)
    {
        $adomany = Adomany::find($id);

        if (is_null($adomany)) {
            return response()->json(['Hiba' => 'Nem létezik adomány ilyen ID-val'],404);
        }

        $validator= Validator::make($request->all(),
        [
            'darabszam'=>'required'   
        ]
        );

        return response()->json(['Siker' => 'Adomány adatai frissítve'],200);
    }

    public function destroy($id)
    {
        $adomany = Adomany::find($id);

        if (is_null($adomany)) {
            return response()->json(['Hiba' => 'Nem létezik adomány ilyen ID-val'],404);
        }

        $adomany->delete();

        return response()->json(['Siker' => 'Adomány törölve'],200);
    }

    public function getById($id)
    {
        $adomany = Adomany::find($id);

        if (is_null($adomany)) {
            return response()->json(['Hiba' => 'Nincs ilyen ID-jű adomány'],404);
        }

        return response()->json($adomany, 200);
    }
}
