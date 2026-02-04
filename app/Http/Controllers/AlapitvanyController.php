<?php

namespace App\Http\Controllers;

use App\Models\Alapitvany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlapitvanyController extends Controller
{
    public function index()
    {
        return Alapitvany::with('ember')->get();
    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            'cegnev'=>'required',
            'helyszin'=>'required',
            'telszam'=>'required',
            'email'=>'required',
            'jelszo'=>'required'
        ]);

        if($validator->fails())
        {
            return response()->json(['Hibaüzenet'=>'Valamelyik kötelező adat hiányzik'],401);
        }

        $alapitvany=Alapitvany::create($request->all());
        return response()->json(['Cégnév:'=>$alapitvany->cegnev],204);
    }


    public function update(Request $request, $id)
    {
        $alapitvany = Alapitvany::find($id);

        if (is_null($alapitvany)) {
            return response()->json(
                ['Hiba' => 'Nem létezik alapítvány ilyen ID-val'],
                404
            );
        }

        $validator= Validator::make($request->all(),
        [
            'cegnev'=>'required',
            'helyszin'=>'required',
            'telszam'=>'required',
            'email'=>'required',
            'jelszo'=>'required'
        ]
        );

        if ($validator->fails()) {
            return response()->json(['Hiba' => 'Valamelyik kötelező adat hiányzik'],401);
        }

        $alapitvany->update($request->all());

        return response()->json(
            ['Siker' => 'Alapítvány adatai frissítve'],
            200
        );
    }

    public function destroy($id)
{
    $alapitvany = Alapitvany::find($id);

    if (is_null($alapitvany)) {
        return response()->json(
            ['Hiba' => 'Nem létezik alapítvány ilyen ID-val'],404);
    }

    $alapitvany->delete();

    return response()->json(['Siker' => 'Alapítvány törölve'],200);
}


    public function getById($id)
    {
        $alapitvany = Alapitvany::find($id);

        if (is_null($alapitvany)) {
            return response()->json(
                ['Hiba' => 'Nincs ilyen ID-jű alapítvány'],
                404
            );
        }

        return response()->json($alapitvany, 200);
    }

    public function filterBy($ember){
        $alapitvany = Alapitvany::where('ember', '=', $ember);
        if($alapitvany->exists())
        {
            return $alapitvany->get();
        }
        else
            {
            return response("Nincs a megfelelő feltételnek alapítvány", 403);

        }
    }

}
