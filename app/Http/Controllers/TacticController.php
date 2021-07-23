<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Tactic;
use Illuminate\Http\Request;

class TacticController extends Controller
{
    public function showMain(){
        return view('content.main');
    }
    public function stratsCreator(){

        $maps = Map::orderBy('map_name')->get();
        return view('content.strats.createStrat',['maps' => $maps]);
    }

    public function createTactic(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ]);

        $map = Map::where('id',$request->input('mapId'))->first();
        print_r($map);
        $tactic = new Tactic([
            'tactic_name'=> $request->input('title'),
            'tactic_content' => $request->input('content'),

        ]);

        $map->tactic()->save($tactic);

        return redirect()->route('strats.createStrat')->with('info','Tactic: '.$request->input('title').' was succesfully created');
    }

    public function show(){

        $tactics = Tactic::orderBy('updated_at')->paginate(1);
        return view('content.strats.viewStrats',['tactics' => $tactics]);
    }

    public function view($id){

        $tactic = Tactic::where('id',$id)->first();
        return view('content.strats.read',['tactic' => $tactic]);
    }
}
