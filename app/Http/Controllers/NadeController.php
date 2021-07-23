<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Nade;
use App\Models\NadeType;
use App\Models\Tactic;
use Illuminate\Http\Request;

class NadeController extends Controller
{
    public function showNades(){
        return view('content.nades.viewNades');
    }

    public function nadeCreator(){
        $nades = NadeType::orderby('nade_type_name')->get();
        $maps = Map::orderby('map_name')->get();

        //tu powinno być że taktyki stworzone przez użytkownika, ale na razie wszystkie
        $tactics = Tactic::orderby('tactic_name')->get();
        return view('content.nades.createNades',['nades'=>$nades,'maps'=>$maps,'tactics'=>$tactics]);
    }

    public function createNade(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'mapId' => 'required',
            'nadeTypeId' => 'required'
        ]);

        $map = Map::where('id',$request->input('mapId'))->first();

        $nade = new Nade([
            'nade_name'=> $request->input('title'),
            'nade_content' => $request->input('content'),
            'nade_type_id' => $request->input('nadeTypeId'),
            'yt_url' => $request->input('ytUrl')
        ]);

        $tacticId = $request->input('tacticId');

        //mutator!!!

        $map->nades()->save($nade);

        if($tacticId){
            $tactic = Tactic::where('id',$tacticId)->first();
            $tactic->nades()->attach($nade->id);
        }

        return redirect()->back()->with('info','Nade: '.$request->input('title').' was succesfully created');
    }


}
