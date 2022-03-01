<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Str;

class PostController extends Controller
{
    //
    public function store(Request $request){
         
        DB::table('posts')->insert([
            'title' =>  $request->title,
            'slug' => Str::of($request->title)->slug('-'),
            'description' => $request->description,
        ]);

    }
}
