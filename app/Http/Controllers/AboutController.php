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
            // "soustitre" => ["required", "min:3", "max:100"],
            // "description" => ["required", "min:3", "max:500"],
            "birthday" => ["required", "min:3", "max:100"],
            "website" => ["required", "min:3", "max:100"],
            "phone" => ["required", "numeric"],
            "city" => ["required", "min:3", "max:100"],
            "age" => ["required", "numeric"],
            "degree" => ["required", "min:3", "max:100"],
            "email" => ["required", "email", "min:3", "max:50"],
            "freelance" => ["required", "min:3", "max:50"],
        ]);
        // $about->soustitre = $request->soustitre;
        // $about->description = $request->description;
        $about->birthday = $request->birthday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->freelance = $request->freelance;
        $about->save();
        return redirect()->route('abouts.index');
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
            // "soustitre" => ["required", "min:3", "max:100"],
            // "description" => ["required", "min:3", "max:500"],
            "birthday" => ["required", "min:3", "max:100"],
            "website" => ["required", "min:3", "max:100"],
            "phone" => ["required", "numeric"],
            "city" => ["required", "min:3", "max:100"],
            "age" => ["required", "numeric"],
            "degree" => ["required", "min:3", "max:100"],
            "email" => ["required", "email", "min:3", "max:50"],
            "freelance" => ["required", "min:3", "max:50"],
        ]);
        $about = $id;
        // $about->soustitre = $request->soustitre;
        // $about->description = $request->description;
        $about->birthday = $request->birthday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->freelance = $request->freelance;
        $about->save();
        return redirect('/backoffice/about/' . $about->id)->with('success', "vos modifications ont bien été mis à jour");
    }
}
