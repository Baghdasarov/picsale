<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\picsdata;
use App\Http\Requests;


class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(){
        $aAllDatas = picsdata::all();
        return view('admin.index',compact('aAllDatas'));
    }
    public function create(){
        return view('admin.create');
    }
    public function destroy(){
        $filename = $_POST['id'];

        if(!$filename)
        {
            return 0;
        }

        $response = "200";

        return $response;
    }
    public function store(Requests\picSale $request){
        $fileAll =  $_POST;
        $file = $_FILES['file'];
        dd($fileAll);
        return "good";
    }
}
