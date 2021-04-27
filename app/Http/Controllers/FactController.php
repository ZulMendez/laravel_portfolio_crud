<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index(){
        $fact = Fact::all();
        return view('backoffice.facts.fact', compact('fact'));
    }
    public function create(){
        return view('backoffice.facts.createFact');
    }
    public function store(Request $request){
        $fact = new Fact();
        request()->validate([
            "counter" => ["required", "numeric"],
            "texte" => ["required", "min:3", "max:100"],
            "icone" => ["required", "min:3", "max:100"],
        ]);
        $fact->counter = $request->counter;
        $fact->texte = $request->texte;
        $fact->icone = $request->icone;
        $fact->save();
        return redirect()->route('facts.index')->with('success', 'Infos bien ajoutés');
    }
    public function destroy(Fact $id){
        $id->delete();
        return redirect()->back();
    }
    public function show(Fact $id){
        $fact = $id;
        return view('backoffice.facts.showFact', compact('fact'));
    }
    public function edit(Fact $id){
        $fact = $id;
        return view('backoffice.facts.editFact', compact('fact'));
    }
    public function update(Fact $id, Request $request){
        request()->validate([
            "counter" => ["required", "numeric"],
            "texte" => ["required", "min:3", "max:100"],
            "icone" => ["required", "min:3", "max:100"],
        ]);
        $fact = $id;
        $fact->counter = $request->counter;
        $fact->texte = $request->texte;
        $fact->icone = $request->icone;
        $fact->save();
        return redirect()->route('facts.show', $fact->id)->with('success', "vos modifications ont bien été mis à jour");
    }
}
