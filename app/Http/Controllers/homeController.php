<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('depan.home',[
            "title" => "Home"
        ]);
        
    }
    public function about(){
        return view('depan.about',[
            "title" => "About"
        ]);
    
    }
    public function profile(){
        return view('depan.profile',[
            "title" => "Profile"
        ]);
    
    }
    public function pegawai(){
        return view('depan.pegawai',[
            "title" => "Pegawai"
        ]);   
    }
}