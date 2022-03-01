<?php

use Illuminate\Support\Facades\Route;
use \Symfony\Component\HttpFoundation\Request;
use \App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.master');
});

Route::get('/post/create', function () {
    return view('addpost');
});

Route::post('/post/store',[PostController::class,'store']);



Route::get('/login',function(){

    $form = <<<FORM
    <form action="submitForm" method="GET">
    Name:<br>
    <input type="text" name ="name"><br>
    Email:<br>
    <input type="email" name="email"><br><br>
    <input type="submit" value="LOGIN">
    </form>
    FORM;
    return $form;

});

Route::get('/submitForm',function(Request $request){
    
    $name = $request->name;
    $email = $request->email;

    echo $name;
    echo '<br/>';
    echo $email;

});

Route::get('/about',function(){
    return "<h1>This is about Page</h1>";
});

Route::get('/contact',function(){
    return "<h1>This is contact Page</h1>";
});

//Route view
// Route::get('/hello/{id}/{age?}',function($id,$age=''){

//     echo $id;
//     echo '<br/>';
//     echo $age;
//     echo '<br/>';
//     return view('hello'); //hello.blade.php
// })->where('id','[0-9]{2}')->where('age','[a-z]+');

Route::get('/hello/{id}/{age?}',function($id,$age=''){

    echo $id;
    echo '<br/>';
    echo $age;
    echo '<br/>';

    return view('hello'); //hello.blade.php


})->where(['id'=>'[0-9]{2}','age'=>'[a-z]+']);

Route::view('/hello-world','hello'); //view Route

Route::get('/data-passing',function(){

    // $data['name'] = 'ravi'; 
    // $data['class'] = '12th'; 
    // $data['marks'] = '100'; 
   
    // return view('hello',$data); //hello.blade.php
    // $name = 'ravi kumar';
    // $class = '11th';
    // $marks = 45;
    // return view('hello',compact('name','class','marks'));

    $name = 'akhil kumar';
    $class = '10th';
    $marks = 80;
    return view('hello')
    ->with('name',$name) //method chaining
    ->with('class',$class) //method chaining
    ->with('marks',$marks); //method chaining


});

Route::get('/add-form',function(){
return view('task.form'); //resources/views/task/form.blade.php
         
});

Route::post('/add-value',function(Request $request){

    $num1 = $request->get('num1');
    //echo $num1;
    $num2 = $request->get('num2');
    //echo $num2;

    echo $num1+$num2;
    echo '<hr/>';

    $num1 = $request->num1;
    //echo $num1;
    $num2 = $request->num2;
    //echo $num2;

    echo $num1+$num2;
    echo '<hr/>';

    $num1 = $request->input('num1');
    //echo $num1;
    $num2 = $request->input('num2');
    //echo $num2;

    echo $num1+$num2;
    echo '<hr/>';

       
});
