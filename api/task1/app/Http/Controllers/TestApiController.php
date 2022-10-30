<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiController extends Controller
{
    //
    public function firstapi(){
       
        return ["slackUsername" => "Temilolaoluwa Tomoloju", "backend"=> "true", "age"=> 19, "bio"=>"Temi is a developer with a keen interest in using technology to solve hardcore problems in Africa."];
    }
}
