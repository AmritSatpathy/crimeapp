<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.frontpage');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function create(){
        return view('pages.create');
    }

    public function createp(){
        return view('pages.createp');
    }

    public function FAQ(){
        return view('pages.FAQ');
    }

    public function feedback(){
        return view('pages.feedback');
    }
    public function frontpage(){
        return view('pages.frontpage');
    }

    public function logout(){
        return view('pages.logout');
    }

    public function login(){
        return view('pages.login');
    }
    
    public function main(){
        return view('pages.main');
    }
    
    public function officerlogin(){
        return view('pages.officerlogin');
    }
    
    public function officersignup(){
        return view('pages.officersignup');
    }


    public function report(){
        return view('pages.report');
    }

    public function Signup(){
        return view('pages.Signup');
    }

}
