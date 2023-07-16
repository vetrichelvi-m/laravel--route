<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

         return'Welcome developer';

    }

    public function create(){
       return view('user.create');
    }

    public function store(Request $request){
       return dd($request);
    }



}
