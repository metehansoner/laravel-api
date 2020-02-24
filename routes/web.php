<?php

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

Route::get('/api', function () {
    
    $json_url = "http://dummy.restapiexample.com/api/v1/employees";
    $json_file = file_get_contents($json_url);
    
    $mydata=json_decode($json_file, true);
    
    $data=array();
    foreach($mydata as $user){
    $data=$user;
    }

    return view('user', ['data'=>$data]);
    
});

Route::get('/userDetail/{id}', function ($id) {

    $json_url = "http://dummy.restapiexample.com/api/v1/employee/".$id;
    $json_file = file_get_contents($json_url);
    
    $mydata=array(json_decode($json_file,true));


    return view("user_detail",['item'=>$mydata[0]]);
    
});
