<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        //echo "A soma de $p1 + $p2 é:".($p1+$p2);

        //return view('site.teste', ['p1'=>$p1,'y'=>$p2]); ///array a sociativo
        //return view('site.teste', compact('p1','p2')); // compact faz a msm coisa que o array nativo do php usa 'string'
        return view('site.teste')->with('xxx', $p1)->with('ttt', $p2); // metodo with também pode ser passado para view
    }
}
