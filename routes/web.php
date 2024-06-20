<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;

Route::get('contactusform',[ContactController::class,'create'])->name('contactusform');
Route::post('insertcontact',[ContactController::class,'store'])->name('insertcontact');
Route::get('contacts',[ContactController::class,'index'])->name('contacts');
Route::get('sendcontactmail',[ContactController::class,'sendcontactmail']);
Route::get('about',[Mycontroller::class,'my_data']);
Route::get('/', function () {
    return view('welcome');
});
// Route::post('signed',[Mycontroller::class,'signed_data'])->name('signed');
// Route::post('studentdata',[StudentController::class,'store'])->name('studentdata');

// Route::get('about/{id?}',function($id=0){
//     return "about".$id;
// })->WhereIn('id',['9','4']);
// Route::view('about','about',[
//     'page_name'=>'mahy blog',
//     'description'=>'hello this is my blog'
// ]);
// Route::get('about',function(){
//     return view('about',[
//         'page_name'=>'mahy',
//         'description'=>'des'
//     ]);
// });
// Route::get('about/{id}',function($id){
//    $name= [
//         '1'=>'m',
//         '2'=>'b'
//    ];
//     return view('about',[
//         'page_name'=>$id,
//         'description'=>$name[$id] ?? "error"
//     ]);
// });
Route::get('form',function(){
    return view('form1');
});
Route::get('formstudent',function(){
    return view('formstudent');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('home',function(){
    return view('home');
});
Route::get('about',function(){
    return view('about');
}) ;
Route::get('session',[Mycontroller::class,'session']);
Route::get('delsession',[Mycontroller::class,'deletesession']);
Route::get('flash',[Mycontroller::class,'flash']);
// Route::post('signed',function(){
Route::get('restore',[Mycontroller::class,'restore']);
Route::get('sendemailtoclient',[Mycontroller::class,'sendemailtoclient']);
// Route::post('signed',function(){
//     return view ('signed');
// })->name('signed');


Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
