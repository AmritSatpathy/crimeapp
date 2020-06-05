<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\FormPeople;
use App\Form;
use Illuminate\Support\Facades\Session;
class FormpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formp.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formp.create');
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
            'username' => 'required',
            'firstname' => 'required',
            'emailid' => 'required',
            'location' => 'required',
            'phonenumber' => 'required',
            'pwd' => 'required',
        ]);
        // Create Post
        $post = new FormPeople;
        $post->firstname = $request->input('firstname');
        $post->lastname = $request->input('lastname');
        $post->emailid = $request->input('emailid');
        $post->phonenumber = $request->input('phonenumber');
        $post->username = $request->input('username');
        $post->location = $request->input('location');
        $post->pwd = $request->input('pwd');
        $post->save();

        return redirect('formp/create')->with('success', 'User Created');
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

    public function find(Request $request)
    {   


        $post = new FormPeople();
        $post->emailid = $request->input('emailid');
        $post->pwd =  $request->input('pwd');
       
        $data = FormPeople::where('emailid', '=',$post->emailid )->first();
        
        if(strcmp($data->pwd,$post->pwd)==0)
        {//session(['ID' =>  $post->emailid]);
            $data = Form::all();
            return view("formp.juicep",compact('data'));
        }
        else
        {return view('formp.index');}
        
    }
}
