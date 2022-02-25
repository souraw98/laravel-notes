<?php

use Illuminate\Support\Facades\Route;
use \Symfony\Component\HttpFoundation\Request;

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
    //return view('welcome');
    // return  "Hello world from Routes web.php";
});


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