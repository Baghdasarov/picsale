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
        $aAllDatas = picsdata::orderby('created_at','desc')->get();
        return view('admin.index',compact('aAllDatas'));
    }
    public function create(){
        $dateFromId = (object)'';

        return view('admin.create',compact('dateFromId'));
    }
    public function edit($id){
        $dateFromId = picsdata::findOrFail($id);
        return view('admin.edit',compact('dateFromId'));
    }

    public function update($id,Requests\picSale $request){
        $picSale = picsdata::findOrFail($id);
        if($request->file('file'))
        {
            if(is_array($request->file('file'))){
                foreach($request->file('file') as $imgFiles){
                    $imageName = $imgFiles->getClientOriginalName();
                }
            }else{
                $imgFiles = $request->file('file');
                $imageName = $request->file('file')->getClientOriginalName();
            }

            $path = base_path() . '/public/images/uploads/';

            $imgFiles->move($path , $imageName)->getRealPath();

            $createFiles = $request->all();

            $createFiles['image']= $imgFiles->getClientOriginalName();
            unset( $createFiles['file']);

            if(!empty($picSale->image)){
                unlink(base_path() ."/public/images/uploads/".$picSale->image);
            }
            $picSale->update($createFiles);

        }else{
            $createFiles = $request->all();
            $picSale->update($createFiles);

        }
        
        return redirect('/admin');
    }
    public function destroy(Requests\picSale $request){
        if($request->get('picDataId') && !empty($request->get('picDataId'))){
            $picDataId = $request->get('picDataId');
            $picsdata = picsdata::findOrFail( $picDataId );
            $picsdata = $picsdata->delete();
            if($picsdata){
                return 1;
            }
        }else{
            return 0;
        }

    }
    public function store(Requests\picSale $request){
        if($request->file('file'))
        {
            $request->file('file');
            if(is_array($request->file('file'))){
                foreach($request->file('file') as $imgFiles){
                    $imageName = $imgFiles->getClientOriginalName();
                }
            }else{
                $imgFiles = $request->file('file');
                $imageName = $request->file('file')->getClientOriginalName();
            }

            $path = base_path() . '/public/images/uploads/';

            $imgFiles->move($path , $imageName)->getRealPath();

            $createFiles = $request->all();

            $createFiles['image']= $imgFiles->getClientOriginalName();
            unset( $createFiles['file']);
            picsdata::create($createFiles);
            return redirect('/admin');

        }else{
            $createFiles = $request->all();
            picsdata::create($createFiles);
            return redirect('/admin');
        }
    }
}
