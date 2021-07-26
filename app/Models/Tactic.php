<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tactic extends Model
{

    protected $table = 'tactics';

    protected $fillable = ['tactic_name','tactic_content','tactic_description'];

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function nades(){
        return $this->belongsToMany(Nade::class)->withTimestamps();
    }

    public function map(){
        return $this->belongsTo(Map::class);
    }

}
