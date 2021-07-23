<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NadeType extends Model
{
    protected $fillable = ['nade_type_name'];

    public $timestamps = false;

    use HasFactory;

    public function nades(){
        return $this->hasMany('App\Models\Nade');
    }
}
