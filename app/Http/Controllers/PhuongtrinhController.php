<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhuongtrinhController extends Controller
{
    //
    function Giaipt(Request $req){

        $req->validate([
            'a'=>'required|integer',
            'b'=>'required|integer',
        ]);
        $a = $req->input('a');
        $b = $req->input('b');

    if($a == 0){
        if($b == 0){
            $kq = "Phương trình vô số nghiệm";
        }
        else{
            $kq = "Phương trình vô nghiệm";
        }
    }
    else{
        $kq = "Phương trình có nghiệm x =" .-$b/$a;
    }
    return view('phuongtrinh', compact("a","b","kq"));
    }
}
