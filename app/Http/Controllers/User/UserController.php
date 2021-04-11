<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //publ
    public function getUser(){
        // User::create(["name"=>"abc-xyz"]);
        // User::where('id',1)->get();
        // User::with('permission')->where("id",1)->first();
        // return 'helow world';
    }
   
}