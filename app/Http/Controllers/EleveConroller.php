<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveConroller extends Controller
{
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    public function create()
    {
        return view('eleves.create');
    }

    public function store(Request $request)
    {
        $eleve = new Eleve();
        $eleve->nom = $request->nom;
        $eleve->age = $request->age;
        $eleve->moyenne = $request->moyenne;
        $eleve->save();

        return redirect("/")->with('msg', "Eleve Ajouter Avec Succes!");
    }

    public function edit($id)
    {
        $eleve = Eleve::find($id);
        return view('eleves.edit', compact('eleve'));
    }

    public function Update(Request $request, $id)
    {
        $eleve = Eleve::find($id);

        $eleve->nom = $request->nom;
        $eleve->age = $request->age;
        $eleve->moyenne = $request->moyenne;
        $eleve->save();

        return redirect("/")->with('msg', "Eleve Ajouter Avec Succes!");
    }

    public function destroy($id)
    {
        $eleve = Eleve::find($id);
        $eleve->delete();

        return redirect("/")->with('msg', "Eleve Supprimer Avec Succes!");
    }
}
