<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = ['map_name'];

    use HasFactory;

    public $timestamps = false;

    public function tactic(){
        return $this->hasMany('App\Models\Tactic');
    }
}
