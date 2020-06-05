<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormReport;
class FormrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formr.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname' => 'required',
            'crimetype' => 'required',
            'phno' => 'required',
            'location' => 'required',
            'policestation' => 'required',
            'info' => 'required',
        ]);
        // Create Post
        $post = new FormReport;
        $post->fullname = $request->input('fullname');
        $post->crimetype = $request->input('crimetype');
        $post->phno = $request->input('phno');
        $post->location = $request->input('location');
        $post->policestation = $request->input('policestation');
        $post->info = $request->input('info');
        $post->age = $request->input('age');
        $post->save();

        return redirect('formr/create')->with('success', 'CRIME REPORTED');
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
