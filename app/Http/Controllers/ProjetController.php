<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index(){
        $projet = Projet::all();
        return view('backoffice.projets.projet', compact('projet'));
    }
    public function create(){
        return view('backoffice.projet.createProjet');
    }
    public function store(Request $request){
        $projet = new Projet();
        request()->validate([
            "img" => ["required", "min:3", "max:100"],
        ]);
        $projet->img = $request->img;
        $projet->save();
        return redirect()->route('projets.index');
    }
    public function destroy(Projet $id){
        $id->delete();
        return redirect()->back();
    }
    public function show(Projet $id){
        $projet = $id;
        return view('backoffice.projet.showProjet', compact('projet'));
    }
    public function edit(Projet $id){
        $projet = $id;
        return view('backoffice.projet.editProjet', compact('projet'));
    }
    public function update(Projet $id, Request $request){
        request()->validate([
            "img" => ["required", "min:3", "max:100"],
        ]);
        $projet = $id;
        $projet->img = $request->img;
        $projet->save();
        return redirect('/backoffice/projet/' . $projet->id)->with('success', "vos modifications ont bien été mis à jour");
    }
}
