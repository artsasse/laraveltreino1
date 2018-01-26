<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploController extends Controller
{
  public function inicial()
      {
          //gerencia dados aqui.

          return view('welcome');
      }

  public function recebeParametro($p1,$p2){
    return view('welcome', [
      'alfa'=>$p1,
      'beta'=>$p2
    ]);
  }

  public function silker(Request $request){
    $first = $request->input('firstname');
    $last = $request-> input('lastname');
    dd($first,$last);
  }

}
