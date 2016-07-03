<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class picsdata extends Model
{
    public static function typePicture(){
        return $type=array(
            'Пейзаж'=>'Пейзаж',
            'ГородскойПейзаж'=>'Городской пейзаж',
            'МорскойПейзаж'=>'Морской пейзаж',
            'ЖанроваяКартина'=>'Жанровая картина',
            'Портрет'=>'Портрет',
            'обнаженнаяНатура'=>'Ню. обнаженная натура',
            'Анималистика'=>'Анималистика',
            'Архитектура'=>'Архитектура',
            'Религия'=>'Религия',
            'ИсторическаяЖивопис'=>'Историческая живопись',
            'Фантазия'=>'Фантазия',
        );
    }
    protected $fillable = [
        'name','type','price','image','about','other'
    ];

    public static function createImages($image){
        return DB::table('picsdatas')->insert(
            ['image' => $image]
        );
    }
    public static function getAll(){
        return DB::table('picsdatas')->get();
    }
}
