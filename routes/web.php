<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//    
route::get('/',function(){
     return view('home');
   })->name('home');

   route::get('/about',function(){
     return view('about');
   })->name('about');


// Route::group(['prefix' => 'admin'], function() {
//     route::get('/',function(){
//          return view('dashboard');
//     });
//  });

 
// Route::group(['prefix' => 'categorry'], function() {
//     route::get('/',function(){
//          return view('categorry.index');
//     });

//     route::get('/create',function(){
//         return view('categorry.create');
//    });
//  });

 Route::group(['prefix' => 'product'], function() {
    route::get('/',function(){
         return view('products');
    })->name('products');

//     route::get('/create',function(){
//         return view('product.create');
//    });
 });

 Route::group(['prefix' => 'contact'], function() {
  route::get('/',function(){
       return view('contact');
  })->name('contact');
});

 