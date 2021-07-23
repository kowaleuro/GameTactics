<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nade extends Model
{
    use HasFactory;

    protected $fillable = ['nade_name','nade_content','yt_url','nade_type_id'];

    public function tactics(){
        return $this->belongsToMany(Tactic::class)->withTimestamps();
    }

    public function map(){
        return $this->belongsTo('App\Models\Map');
    }

    public function nadeType(){
        return $this->belongsTo('App\Models\NadeType');
    }

}
