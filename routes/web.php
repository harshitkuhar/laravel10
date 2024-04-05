<?php

use Illuminate\Support\Facades\Route;

function getUsers(){
    return [
        1 => ['name'=>'Harshit', 'name'=>'Harshit', 'city'=>'MBD'],
        12 => ['name'=>'Satyam', 'city'=>'Bijnor'],
        23 => ['name'=>'Deepak', 'city'=>'Delhi'],
    ];
}


Route::get('/', function () {
    return view('home');
});


Route::get('/users', function () {
    $names = getUsers();
    return view('users', ['user'=>$names]);
});

Route::get('/user/{id}', function ($id) {
    $allusers = getUsers();
    $user = $allusers[$id];
    return view('user', ['id'=>$user]);
})->name('viewUser');


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/', function () {
//     return view('home');
// })->name('/');

// Group routes

// Route::prefix('page')->group(function(){
//     Route::get('/about', function () {
//         return "<h1>About Page</h1>";
//     });
    
//     Route::get('/post', function () {
//         return "<h1>Post Page</h1>";
//     });
    
//     Route::get('/post/firstpost', function () {
//         return "<h1>First Post Page</h1>";
//     });
// });

// Route::get('/page/about', function () {
//     return "<h1>About Page</h1>";
// });

// Route::get('/page/post', function () {
//     return "<h1>Post Page</h1>";
// });

// Route::get('/page/post/firstpost', function () {
//     return "<h1>First Post Page</h1>";
// });



// named routes
// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/post', function () {
//     return view('post');
// })->name('post');

// Route::get('/about/{id?}/comment/{commentid?}', function ($id = null, $commentid = null) {

//     if ($id) {
//         return "<p>Page ID is: ". $id ."</p> <p>Comment ID is: ". $commentid ."</p>";
//     }else{
//         return "<p>No ID Found</p>";
//     }
    
// });


// Route Constraints
// Route::get('/about/{id}', function ($id) {

//     if ($id) {
//         return "<p>Page ID is: ". $id ."</p>";
//     }else{
//         return "<p>No ID Found</p>";
//     }
    
// })->whereNumber("id");



// Route::get('/about/{id}', function ($id) {

//     if ($id) {
//         return "<p>Page ID is: ". $id ."</p>";
//     }else{
//         return "<p>No ID Found</p>";
//     }
    
// })->whereIn("id", ["harsh", "song", "painting"]);





//  7th video completed successfully
