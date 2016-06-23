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
        dd($request->all());
        if($request->file('file'))
        {
            $request->file('file');
            if(is_array($request->file('file'))){
                foreach($request->file('file') as $imgFiles){
                    $imageName = $imgFiles->getClientOriginalName();
                }
            }else{
                $imageName = $request->file('file')->getClientOriginalName();
            }

            $path = base_path() . '/public/images/uploads/';

            $imgFiles->move($path , $imageName)->getRealPath();

            $createFiles = $request->all();

            $createFiles['file']= $imgFiles->getClientOriginalName();

//            picsdata::create($createFiles);

        }else{
            $createFiles = $request->all();
            picsdata::create($createFiles);
        }
        $createFiless = $request->all();
        var_dump($createFiles);
        dd($createFiless);
//        dd($request->all());
//        $fileAll =  $_POST;
//        $file = $_FILES['file'];
//        dd($fileAll);
//        return "good";
    }
}
