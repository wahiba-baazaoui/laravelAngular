<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cv;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cv = Cv::all();

        
        return view('cv.index', ['cv'=> $cv] );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $cv = new Cv();

       $cv->titre = $request->input('title');
       $cv->presentation = $request->input('presentation');
       $cv->save();

       return "message enrg";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cv =Cv::find($id);
        return view('cv.edit'   , compact('cv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cv = Cv::find($id);
        $cv->titre = $request->input('title') ;
        $cv-> presentation= $request->input('presentation') ;
        $cv->save();
        return redirect('cvs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cv= Cv::find($id);
       $cv->delete();
       return redirect('cvs');
    }
}
