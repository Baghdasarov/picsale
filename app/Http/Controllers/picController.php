<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\picsdata;
use App\Http\Requests;

class picController extends Controller
{
    public function getIndex(){
        $picTypeLists = picsdata::typePicture();
        return view('pages.index',compact('picTypeLists'));
    }
}
