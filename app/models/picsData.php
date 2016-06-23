<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class picsdata extends Model
{
    protected $fillable = [
        'name','type','price','image','about','other'
    ];

    public static function getAll(){
        return DB::table('picsdatas')->get();
    }
}
