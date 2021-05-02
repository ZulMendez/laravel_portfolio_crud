<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // dd($request->file('img'));
        request()->validate([
            "img" => ["required"],
            "filter" => ["required", "min:3", "max:100"],
        ]);
        // storage via input
        $request->file('img')->storePublicly('img/portfolio/','public');

        // DB
        $projet = new Projet();
        $projet->img = $request->file('img')->hashName();
        $projet->filter = $request->filter;
        $projet->save();
        return redirect()->route('projets.index')->with('success', 'Infos bien ajoutés');
    }
    public function destroy(Projet $id){
        $id->delete();
        Storage::disk('public')->delete('img/portfolio/' . $id->img);
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
            "img" => ["required"],
            "filter" => ["required", "min:3", "max:100"],
        ]);
        $projet = $id;
        if ($request->file('img') != null){
            Storage::disk('public')->delete('img/portfolio/' . $id->img);
            $request->file('img')->storePublicly('img/portfolio/' , 'public');

            // DB 
            $projet->img = $request->file('img')->hashName();
            $projet->filter = $request->filter;
            $projet->save();
        }
        
        return redirect()->route('admin')->with('success', "vos modifications ont bien été mis à jour");
    }
}
