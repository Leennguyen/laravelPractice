<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PheptinhController extends Controller
{
    //
    public function Tinh(Request $req){
        $req->validate([
            'a'=>'required|integer',
            'b'=>'required|integer',
        ]);
        $a = $req->input('a');
        $b = $req->input('b');
        $c = $req->input('c');

        if($c == 'cong')
            $kq = $a + $b;
        elseif($c == 'tru')
            $kq = $a - $b;
        elseif($c == 'nhan')
            $kq = $a * $b;
        elseif($b == 0 & $c == "chia")
            $kq = 'khong chia duoc';
        else
            $kq = $a / $b;
         return view('pheptinh', compact("a","b","c","kq"));
     
    }
}
