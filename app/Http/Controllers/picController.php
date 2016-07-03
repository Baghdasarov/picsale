<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\picsdata;
use App\Http\Requests;

class picController extends Controller
{
    public function getIndex(){
        $picTypeLists = picsdata::typePicture();
        $picsDatas = picsdata::getAll();
        return view('pages.index',compact('picTypeLists','picsDatas'));
    }
    public function getFilterGallery(Requests\picSale $request){
        $getFilterGalleryKey =$request->get('getFiltrGalKey');
        $getGalleryType = picsdata::getFilterGallery($getFilterGalleryKey);

//        return response()->json([
//            'status' => 'success',
//            'errors' => false,
//            'data' => [
//                'rows' => json_decode($getGalleryType->toJson()),
//                'paginationMarkup' => $getGalleryType->render()
//            ]
//        ], 200);

        return json_encode($getGalleryType);
    }
}
