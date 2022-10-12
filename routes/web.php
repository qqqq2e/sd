<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/', function () {
//     return view('accueil');
// });
// Route::get('/', function () {
//     return view('accueil');
// });
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/to_name', [App\Http\Controllers\RegesterController::class, 'to_name']);
Route::post('/regester', [App\Http\Controllers\RegesterController::class, 'regester']);
Route::post('/login', [App\Http\Controllers\RegesterController::class, 'login']);
// Route::get('/info_meeting', [App\Http\Controllers\RegesterController::class, 'info_to_meeting']);
Route::get('/profile', [App\Http\Controllers\RegesterController::class, 'to_profile']);
Route::get('/check', [App\Http\Controllers\RegesterController::class, 'check']);


// session('user')['email'];
Route::get('/register_t', function () {
    return view('reg');
});
// Route::get('/login_t', function () {
//     return view('login');
// });

// Route::get('/d', [App\Http\Controllers\RegesterController::class, 'd']);
Route::get('/me', [App\Http\Controllers\RegesterController::class, 'me']);
Route::get('/log', [App\Http\Controllers\RegesterController::class, 'log']);
Route::get('/join_to_room', [App\Http\Controllers\RegesterController::class, 'join_to_room']);
Route::get('/join', [App\Http\Controllers\RegesterController::class, 'join']);

Route::get('/profile', [App\Http\Controllers\RegesterController::class, 'to_profile']);

Route::post('/modify_information', [App\Http\Controllers\RegesterController::class, 'modify_information']);

Route::get('/reg', function () {
    return view('reg');
});

Route::get('/logout', [App\Http\Controllers\RegesterController::class, 'logout']);
Route::get('/cont', [App\Http\Controllers\RegesterController::class, 'cont']);



Route::get('/to_name2', [App\Http\Controllers\RegesterController::class, 'to_name2']);
// statistics
Route::get('/d', [App\Http\Controllers\ReunionController::class, 'statistics']);
Route::get('/to_home/{id}', [App\Http\Controllers\ReunionController::class, 'to_home']);

Route::get('/user', [App\Http\Controllers\ReunionController::class, 'store']);


Route::get('/conferance', function () {
    return view('conferance');
});

Route::get('/getInfo', [App\Http\Controllers\ReunionController::class, 'getInfo']);


Route::get('/add_conferance', [App\Http\Controllers\ReunionController::class, 'add_conferance']);

Route::get('/delete1/{id}', [App\Http\Controllers\ReunionController::class, 'delete1']);

Route::get('/edit1/{id}', [App\Http\Controllers\ReunionController::class, 'edit1']);

Route::get('update', [App\Http\Controllers\ReunionController::class, 'update']);

Route::get('delete_all', [App\Http\Controllers\ReunionController::class, 'delete_all']);

Route::get('delete', [App\Http\Controllers\ReunionController::class, 'delete']);

Route::get('/delete_all1/{str}', [App\Http\Controllers\ReunionController::class, 'delete_all1']);





// Route::get('/webinar', function () {
//     return view('webinar');
// });

// Route::get('/admin', function () {
//     return view('admin');
// });
Route::get('/', [App\Http\Controllers\ReunionController::class, 'webinar']);

Route::get('/admin', [App\Http\Controllers\ReunionController::class, 'admin']);

Route::get('/accept_etat/{id}', [App\Http\Controllers\ReunionController::class, 'accept_etat']);

Route::get('/refuse_etat/{id}', [App\Http\Controllers\ReunionController::class, 'refuse_etat']);

Route::get('/search', [App\Http\Controllers\ReunionController::class, 'search']);

Route::get('/order_by_permission', [App\Http\Controllers\ReunionController::class, 'order_by_permission']);

Route::get('/order_by_etat', [App\Http\Controllers\ReunionController::class, 'order_by_etat']);

Route::get('/feed', [App\Http\Controllers\ReunionController::class, 'feed']);



Route::get('/search_conferance', [App\Http\Controllers\ReunionController::class, 'search_conferance']);

Route::get('/search_conf', [App\Http\Controllers\ReunionController::class, 'search_conf']);

Route::get('/join_conf/{id}', [App\Http\Controllers\ReunionController::class, 'join_conf']);

Route::post('/admin_login', [App\Http\Controllers\AdminController::class, 'admin_login']);

Route::get('/login_admin', function () {
    return view('admin_login');
});

Route::get('/admin_deconnexion', [App\Http\Controllers\AdminController::class, 'admin_deconnexion']);

Route::get('/myConf', [App\Http\Controllers\ReunionController::class, 'myConf']);

Route::get('/more/{id}', [App\Http\Controllers\ReunionController::class, 'more']);


Route::get('/aa', [App\Http\Controllers\ReunionController::class, 'aa']);

Route::get('/allEmail/{id}', [App\Http\Controllers\ReunionController::class, 'allEmail']);

// Route::get('/live_search', 'LiveSearch@index');
// Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
