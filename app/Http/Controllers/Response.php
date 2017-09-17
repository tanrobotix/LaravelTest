<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Response extends Controller
{
    public function showResponse(){
    	return view('result.response');
    }
    public function resultProcess(){
    	echo "Udermaintance";
    }
}

