<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Map;
use App\Models\Tactic;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;


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
            'description' => 'required'
        ]);

        $map = Map::where('id',$request->input('mapId'))->first();
        print_r($map);
        $tactic = new Tactic([
            'tactic_name'=> $request->input('title'),
            'tactic_description' => $request->input('description'),
            'tactic_content' => $request->input('content')

        ]);

        $map->tactic()->save($tactic);

        return redirect()->route('strats.createStrat')->with('info','Tactic: '.$request->input('title').' was succesfully created');
    }

    public function show(){

        //$tactics = Tactic::orderBy('updated_at')->with('likes','map','nades')->paginate(5);

        $tactics = QueryBuilder::for(Tactic::class)
            //->with('likes')
            ->with('map')
            ->with('nades')
            ->with('likes')
            ->withCount('likes')
            ->defaultSort('updated_at')
            ->allowedSorts('updated_at','likes_count')
            ->allowedFilters(['id'])
            ->paginate(1);

        return view('content.strats.viewStrats',['tactics' => $tactics]);
    }

    public function view($id){

        $tactic = Tactic::where('id',$id)->first();
        return view('content.strats.read',['tactic' => $tactic]);
    }

    public function like($id){
        $tactic = Tactic::where('id',$id)->first();
        $like = new Like();
        $tactic->likes()->save($like);
        return redirect()->back();

    }

}
