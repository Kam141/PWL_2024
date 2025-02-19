<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }

    // public function index(){
    //     return 'Selamat Datang';
    // }
    // public function about(){
    //     return 'Kamila Habiba Putri Annata (2341720175)';
    // }

    // public function articles($id){
    //     return 'Halaman artikel dengan id '. $id;
    // }

    // public function greeting(){
    //     return view('blog.hello', ['name' => 'MILLL']);
    //     }

    public function greeting(){
        return view('blog.hello')
            ->with('name', 'Andi')
            ->with('occupation', 'Astronaut');
    }
}
