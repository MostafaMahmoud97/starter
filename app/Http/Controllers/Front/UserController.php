<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function __construct()
    {
        //$this -> middleware('auth')->except('ShowUserName1');
    }

    public function ShowUserName1(){
        return "zoka 1 bas";
    }

    public function ShowUserName2(){
        return "zoka 2 bas";
    }
    public function ShowUserName3(){
        return "zoka 3 bas";
    }
    public function ShowUserName4(){
        return "zoka 4 bas";
    }
    public function ShowUserName5(){
        return "zoka 5 bas";
    }

    public function ShowUserDetail(){
        $arr = array(
            'name' => "zoka",
            'age' => 23,
            'job' => "software Enginer"
        );

        foreach($arr as $key => $val){
            echo $key." = ".$val."<br>";
        }
    }

}
