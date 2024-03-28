<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vercel extends Controller
{
    public function index(){
        $data = [
            'id'=>1,
            'name'=>'victor',
            'email'=>'victorhugo.almeidamag@gmail.com'
        ];
        return response()->json($data);
    }
}
