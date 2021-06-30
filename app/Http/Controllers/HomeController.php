<?php

namespace App\Http\Controllers;

use App\movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $movies = movie::all();
        $movies1 = movie::where('original_title','The Godfather')->get();
        dump($movies1[0]['original_title'] );
        $data = [
            'movies' => $movies,
            
        ];
        return view('home',$data);
    }


}
