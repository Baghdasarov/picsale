<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\picsdata;
use App\Http\Requests;

class picController extends Controller
{
    public function getIndex(Requests\picSale $request){
        if($request->ajax()){
            $getFilterGalleryKey =$request->get('getFiltrGalKey');
            $getGalleryType = picsdata::getFilterGallery($getFilterGalleryKey);

            return response()->json([
                'status' => 'success',
                'errors' => false,
                'data' => [
                    'rows' => json_decode($getGalleryType->toJson()),
                    'paginationMarkup' => (string)$getGalleryType->links(),
                ]
            ], 200);
        }else{
            $picTypeLists = picsdata::typePicture();
            $picsDatas = picsdata::getAll();
            return view('pages.index',compact('picTypeLists','picsDatas'));
        }

    }
}
