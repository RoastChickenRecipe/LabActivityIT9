<?php

namespace App\Http\Controllers;

use App\Http\Requests\indexRequest;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function viewIndex(){ 
        $name = '';
        $contact = '';
        return view('index', ['name'=>$name, 'contact'=>$contact]);
    }

    public function newUser(){
        return view('userForm');
    }

    public function displayUser(indexRequest $request){
        $name = $request->name;
        $contact = $request->contact;
        return view('index', ['name'=>$name, 'contact'=>$contact]);
    }


}
