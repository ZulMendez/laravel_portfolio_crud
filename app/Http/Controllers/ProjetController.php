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
        return view('backoffice.projets.createProjet');
    }
    public function store(Request $request){
        $projet = new Projet();
        request()->validate([
            "img" => ["required", "min:3", "max:100"],
            "filter" => ["required", "min:3", "max:100"],
        ]);
        $projet->img = $request->img;
        $projet->filter = $request->filter;
        $projet->save();
        return redirect()->route('projets.index')->with('success', 'Infos bien ajoutés');
    }
    public function destroy(Projet $id){
        $id->delete();
        return redirect()->back();
    }
    public function show(Projet $id){
        $projet = $id;
        return view('backoffice.projets.showProjet', compact('projet'));
    }
    public function edit(Projet $id){
        $projet = $id;
        return view('backoffice.projets.editProjet', compact('projet'));
    }
    public function update(Projet $id, Request $request){
        request()->validate([
            "img" => ["required", "min:3", "max:100"],
        ]);
        $projet = $id;
        $projet->img = $request->img;
        $projet->save();
        return redirect()->route('projets.show', $projet->id)->with('success', "vos modifications ont bien été mis à jour");
    }
}
