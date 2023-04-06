<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function quiz2(){
        return 'fkashdfksj';
    }
    public function index2(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310025;
        $students[] = array("npm"=>212310021, "name"=>"Cindy Kevina", "gender"=>"F", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310014, "name"=>"Frila Butut", "gender"=>"F", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310054, "name"=>"Hera Here", "gender"=>"F", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310023, "name"=>"Abang Rayyan", "gender"=>"M", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310055, "name"=>"Naga Rawr", "gender"=>"M", "alamat"=>"Bumi");
        $data['students'] = $students;
        return view('home')->with("data",$data);
    }
}
