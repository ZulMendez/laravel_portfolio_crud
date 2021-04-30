<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        return view('backoffice.about.about', compact('about'));
    }
    public function create(){
        return view('backoffice.about.createAbout');
    }
    public function store(Request $request){
        $about = new About();
        request()->validate([
            "info" => ["required", "min:3", "max:100"],
            "value" => ["required", "min:1", "max:100"],
        ]);
        $about->info = $request->info;
        $about->value = $request->value;
        $about->save();
        return redirect()->route('abouts.index')->with('success', 'Infos bien ajoutés');
    }
    public function destroy(About $id){
        $id->delete();
        return redirect()->back();
    }
    public function show(About $id){
        $about = $id;
        return view('backoffice.about.showAbout', compact('about'));
    }
    public function edit(About $id){
        $about = $id;
        return view('backoffice.about.editAbout', compact('about'));
    }
    public function update(About $id, Request $request){
        request()->validate([
            "info" => ["required", "min:3", "max:100"],
            "value" => ["required", "min:1", "max:100"],
        ]);
        $about = $id;
        $about->info = $request->info;
        $about->value = $request->value;
        $about->save();
        return redirect()->route('abouts.show', $about->id)->with('success', "vos modifications ont bien été mis à jour");
    }
}
