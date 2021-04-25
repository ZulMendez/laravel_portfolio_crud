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
        return view('backoffice.skill.createSkill');
    }
    public function store(Request $request){
        $skill = new Skill();
        request()->validate([
            "html" => ["required", "numeric"],
            "css" => ["required", "numeric"],
            "javascript" => ["required", "numeric"],
            "php" => ["required", "numeric"],
            "cms" => ["required", "numeric"],
            "photoshop" => ["required", "numeric"],
        ]);
        $skill->html = $request->html;
        $skill->css = $request->css;
        $skill->javascript = $request->javascript;
        $skill->php = $request->php;
        $skill->cms = $request->cms;
        $skill->photoshop = $request->photoshop;
        $skill->save();
        return redirect()->route('skills.index');
    }
    public function destroy(Skill $id){
        $id->delete();
        return redirect()->back();
    }
    public function show(Skill $id){
        $skill = $id;
        return view('backoffice.skill.showSkill', compact('skill'));
    }
    public function edit(Skill $id){
        $skill = $id;
        return view('backoffice.skill.editSkill', compact('skill'));
    }
    public function update(Skill $id, Request $request){
        request()->validate([
            "html" => ["required", "numeric"],
            "css" => ["required", "numeric"],
            "javascript" => ["required", "numeric"],
            "php" => ["required", "numeric"],
            "cms" => ["required", "numeric"],
            "photoshop" => ["required", "numeric"],
        ]);
        $skill = $id;
        $skill->html = $request->html;
        $skill->css = $request->css;
        $skill->javascript = $request->javascript;
        $skill->php = $request->php;
        $skill->cms = $request->cms;
        $skill->photoshop = $request->photoshop;
        $skill->save();
        return redirect('/backoffice/skill/' . $skill->id)->with('success', "vos modifications ont bien été mis à jour");
    }
}
