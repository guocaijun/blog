<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    public function index(){
    	echo "this is person index";
    }

    public function delete(){
    	echo "this is person delete";
    }
}
