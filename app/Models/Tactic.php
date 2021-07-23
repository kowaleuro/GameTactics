<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tactic extends Model
{
    protected $fillable = ['tactic_name','tactic_content','tactic_likes'];

    public function map(){
        return $this->belongsTo('App\Models\Map');
    }

}
