<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Age;

class AdminController extends Controller
{
    //
    public function showadmin(Request $request){
        //Выводим данные формы
        $age=Age::all();
        //dd($request);
        if($request->isMethod('POST'))
        {
            echo($request->age);
            
        }
        return view('admin')->with('age',$age);
    }









    public function ages(Request $request){
        //Выводим данные формы
        
        dd($request);
        if($request->isMethod('POST'))
        {
            echo('Пришел ответ');
            dd($request);
        }
        return view('admin');
    }
}
