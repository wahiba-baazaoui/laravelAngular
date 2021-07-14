<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Api;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    
public  function createapi(Request $request){
 $api= new Api();


 $api->title= $request->input('title');
 $api->presentation= $request->input('presentation');
 $api->save();

 return response()->json($api);
}


public  function api(){

return (['cv'=>'cv', 'email'=>'hello  world']);
}

public function index(){
    $api = Api::all();


    return (['api' => $api]);


}

public function show($id){

    $api = Api::find($id);

    return (compact('api'));


}

/************* find by id  or  all  */

public function findoneall($id=null){

    $api = $id? Api::find($id):Api::all(); /****** */

    return (compact('api'));


}

public function update(Request $request){
    $api = Api::find($request->id);

    $api->title = $request->title;
    $api->presentation = $request->presentation;
    $api->membre_id = $request->membre_id;

   

    if  ( $api->save()){

        return (['msg'=>'success']);
    }else {
        return (['error'=>'error']);
    }

    

}

public function search($title){
    return Api::where('title' , $title)->get();

}
public function delete($id){
    $api = Api::find($id);
    if ($api->delete()){

    return(['msg','msj  is  deleted']);
}

}
public function testdata(Request $request){

    $api = new Api ();
    $rules = [
        'title'=>'required|min:3|max:255',
        'presentation'=>'required|min:3|max:255',
     'membre_id'=>'required'
    ];


    $validator = Validator::make($request->all(), $rules);
  
    if ($validator->fails()) {

        return response()->json($validator->errors(),404);
    } else{
    $api->title =$request->title;
    $api->presentation =$request->presentation;
    $api->membre_id =$request->membre_id;
    $reult= $api->save();

    if($reult){
        return(['result'=>'success']);
    }else{
        return(['result'=>'not success']);
    }
    }


}

}

