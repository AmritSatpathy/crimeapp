<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormOfficer;
use App\Form;
use Illuminate\Support\Facades\Session;

class FormoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('formo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formo.create');
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
            'officerid' => 'required',
            'uname' => 'required',
            'pwd' => 'required',
            'ustation' => 'required',
        ]);
        // Create Post
        $post = new FormOfficer;
        $post->fullname = $request->input('fullname');
        $post->officerid = $request->input('officerid');
        $post->uname = $request->input('uname');
        $post->ustation = $request->input('ustation');
        $post->pwd = $request->input('pwd');
        $post->post = $request->input('post');
        $post->save();

        return redirect('formo/create')->with('success', 'Officer Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return FormOfficer::find($id);
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
    
    
    public function find(Request $request)
    {   


        $post = new FormOfficer;
        $post->officerid = $request->input('officerid');
        $post->pwd = $request->input('pwd');
        $data = FormOfficer::where('officerid', '=',$post->officerid )->first();
        if(strcmp($data->pwd,$post->pwd)==0)
        {   
           // $request->session()->put('key', $post->officerid);
            $data = Form::all();
            return view("formo.juiceo",compact('data'));
        }
        else
        {return view('formo.index');}
        
    }
    
    
    

}
