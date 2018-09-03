<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\createJob;

class createJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createJob');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'name' => 'required',
             'education' => 'required',
             'currentJob' => 'required',
             'currentJobTime' => 'required',
             'previousJob' => 'required',
             'previousJobTime' => 'required',
             'location' => 'required',
             'areaOfWork' => 'required',
             'jobPreference' => 'required'
        ]);
        
        $post = new createJob;    
        $post->name = $request->input('name');
        $post->education = $request->input('education');
        $post->currentJob = $request->input('currentJob');
        $post->currentJobTime = $request->input('currentJobTime');
        $post->previousJob = $request->input('previousJob');
        $post->previousJobTime = $request->input('previousJobTime');
        $post->location = $request->input('location');
        $post->areaOfWork = $request->input('areaOfWork');
        $post->jobPreference = $request->input('jobPreference');
        $post->userID = auth()->user()->id;
        $post->save();

        return redirect('/createJob2');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
