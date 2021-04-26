<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skill = Skill::all();
        return view('backoffice.skills.skill', compact('skill'));
    }
    public function create(){
        return view('backoffice.skills.createSkill');
    }
    public function store(Request $request){
        $skill = new Skill();
        request()->validate([
            "compet" => ["required", "min:3", "max:100"],
            "pourcent" => ["required", "numeric"],
        ]);
        $skill->compet = $request->compet;
        $skill->pourcent = $request->pourcent;
        $skill->save();
        return redirect()->route('skills.index')->with('success', 'Infos bien ajoutés');
    }
    public function destroy(Skill $id){
        $id->delete();
        return redirect()->back();
    }
    public function show(Skill $id){
        $skill = $id;
        return view('backoffice.skills.showSkill', compact('skill'));
    }
    public function edit(Skill $id){
        $skill = $id;
        return view('backoffice.skills.editSkill', compact('skill'));
    }
    public function update(Skill $id, Request $request){
        request()->validate([
            "compet" => ["required", "min:3", "max:100"],
            "pourcent" => ["required", "numeric"],
        ]);
        $skill = $id;
        $skill->compet = $request->compet;
        $skill->pourcent = $request->pourcent;
        $skill->save();
        return redirect()->route('skills.show', $skill->id)->with('success', "vos modifications ont bien été mis à jour");
    }
}
