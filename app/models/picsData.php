<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class picsdata extends Model
{
    public static function typePicture(){
        return $type=array(
            'Пейзаж'=>'Пейзаж',
            'Натюрморт'=>'Натюрморт',
            'ЖанроваяКартина'=>'Жанровая Картина',
            'Портрет'=>'Портрет',
            'обнаженнаяНатура'=>'Ню. обнаженная натура',
            'Анималистика'=>'Анималистика',
            'Архитектура'=>'Архитектура',
            'Религия'=>'Религия',
            'Исторический'=>'Исторический',
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
    public static function getAll($pageinate){
        return DB::table('picsdatas')->orderBy('created_at', 'desc')->paginate($pageinate);
    }
//    public static function getAllGallery(){
//        return DB::table('picsdatas')->paginate(20);
//    }
    public static function getFilterGallery($getFilterGallerykey,$pageinate){

        if(empty($getFilterGallerykey)){
            return DB::table('picsdatas')->orderBy('created_at', 'desc')->paginate($pageinate);
        }else{
            return DB::table('picsdatas')->where('type',$getFilterGallerykey)->orderBy('created_at', 'desc')->paginate($pageinate);
        }
        
    }
//    public static function getFilterGallery($getFilterGallerykey){
//
//        if(empty($getFilterGallerykey)){
//            return DB::table('picsdatas')->paginate(20);
//        }else{
//            return DB::table('picsdatas')->where('type',$getFilterGallerykey)->paginate(3);
//        }
//
//    }
}
