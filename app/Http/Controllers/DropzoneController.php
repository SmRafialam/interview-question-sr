<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function dropzone(){
        return view('product');
    }

    public function dropzonestore(Request $request){
        $image = $request->file('file');
        $imgCustomName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images').$imgCustomName);
        //$location = public_path('images'.$imgCustomName);
        //Image::make($image)->save($location);
        // $dropzoneStore->image = $imgCustomName;
        // $dropzoneStore->save();
        // return redirect()->route('subcategorymanage');
        return response()->json(['success'=>$imgCustomName]);
    }
}
