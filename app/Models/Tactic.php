<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tactic extends Model
{
    protected $fillable = ['tactic_name','tactic_content'];

    public function nades(){
        return $this->belongsToMany(Nade::class)->withTimestamps();
    }

    public function map(){
        return $this->belongsTo('App\Models\Map');
    }

}
