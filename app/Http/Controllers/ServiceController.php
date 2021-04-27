<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $service = Service::all();
        return view('backoffice.servs.service', compact('service'));
    }
    public function create(){
        return view('backoffice.servs.createServ');
    }
    public function store(Request $request){
        $service = new Service();
        request()->validate([
            "icone" => ["required", "min:3", "max:100"],
        ]);
        $service->icone = $request->icone;
        $service->save();
        return redirect()->route('servs.index')->with('success', 'Infos bien ajoutés');
    }
    public function destroy(Service $id){
        $id->delete();
        return redirect()->back();
    }
    public function show(Service $id){
        $service = $id;
        return view('backoffice.servs.showServ', compact('service'));
    }
    public function edit(Service $id){
        $service = $id;
        return view('backoffice.servs.editServ', compact('service'));
    }
    public function update(Service $id, Request $request){
        request()->validate([
            "icone" => ["required", "min:3", "max:100"],
        ]);
        $service = $id;
        $service->icone = $request->icone;
        $service->save();
        return redirect()->route('servs.show', $service->id)->with('success', "vos modifications ont bien été mis à jour");
    }
}
