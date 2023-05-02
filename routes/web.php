<?php

use App\Http\Controllers\Articles;
use App\Http\Controllers\Home;
use App\Http\Controllers\HomeCont;
use App\Http\Controllers\indexCont;
use App\Http\Controllers\loginCont;
use App\Http\Controllers\pagesCont;
use App\Http\Controllers\postController;
use App\Http\Controllers\postsCont;
use App\Http\Controllers\registerCont;
use App\Http\Controllers\uploadFileCont;
use App\Http\Controllers\welcome;
use App\Models\students;
use Illuminate\Support\Facades\Route;

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
// // Basic Routes 

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/services', function () {
//     return view('services');
// });
// // Parameter Routes

// // Route::get('/articles/{id}', function (Request $request, $id) {
// //     return "Article ID:" . $id;
// // });
// Route::get('/articles/{id}', function (Request $request, $id) {
//     return view('articles');
// });
// Route::get('/articles', function () {
//     return view('articles');
// });
// Route::get('/article/{id}', function (Request $request, $id) {
//     return "Article ID:" . $id;
// });
// // Naming Routes
// Route::get('/sign up', function () {
//     return view('sign up');
// });
// Route::get('/edit', function () {
//     return "Insert !";
// })->name('ins');
// Route::post('/edit', function () {
//     return "Deleted !";
// })->name('delete');
// // Group Routes
// Route::group(['prefix'=>'en'],function(){
// Route::get('/sign up', function () {
//     return 'signUp';
// });
// Route::get('/log in', function () {
//     return 'logIn';
// });
// });
// Route::post('/page1', function () {
//     return view('page1');
// });

// =================================================//
// Create Controller
//Route::get('/', [welcome::class, 'index']);
// Route::get('/', [indexCont::class,'index2']);
// Create Controller by passing parameters
// Route::get('/index', [indexCont::class, 'index']);
//Route::get('/articles', [Articles::class, 'index']);
//Route::get('/article/{id}', [Articles::class, 'Display']);
/////////////////////////////////////////////////////////
//Layouts
// Route::get('/test_layouts', function () {
//     return view('test_layouts');
// });
//Route::get('/', [indexCont::class, 'index']);
// Route::get('/', [indexCont::class, 'select_DB']);
// Route::post('store', [indexCont::class, 'insert_DB'])->name('store');
// Route::post('delete/{id}', [indexCont::class, 'Delete_DB'])->name('del');
// Route::get('update/{id}', [indexCont::class, 'Update_DB']);
// Route::post('updated/{id}', [indexCont::class, 'BackHome_DB'])->name('back');
//////////////////////////////////////////////////////////////////////////////
//create validatation form
//Route::get('/post/create', [indexCont::class, 'create']);
//Route::post('/post', [indexCont::class, 'store'])->name('post');
//////////////////////////////////////////////////////////////////

// //Upload File
// Route::get('login', [loginCont::class, 'index']);
// Route::post('/login', [loginCont::class, 'login'])->name('loginUser');

// Route::get('register', [registerCont::class, 'index']);
// Route::post('/register', [registerCont::class, 'create'])->name('createUser');

// Route::get('uploadFile', [uploadFileCont::class, 'index']);
// Route::post('/uploadFile', [uploadFileCont::class, 'create'])->name('uploadImg');

// Route::group(['middleware' => 'checkAuth'], function () {
//     Route::get('dashboard',function(){
//         return 'LoggedIn';
//     });
//     Route::get('Accounts',function(){
//         return 'Accounts';
//     });

// });
/////////////////////////////////////////////////////////////////////////
// //Register Form
// Route::get('register', [registerCont::class, 'index']);
// Route::post('/register', [registerCont::class, 'create'])->name('createUser');
/////////////////////////////////////////////////////////////////////////////////
// //Login Form
// Route::get('login', [loginCont::class, 'index']);
// Route::post('/login', [loginCont::class, 'store'])->name('loginUser');
//Register Form
//  Route::get('register', [registerCont::class, 'index']);
//  Route::post('/register', [registerCont::class, 'create'])->name('createUser');

//  //middleware
// Route::group(['middleware' => 'checkAuth'], function () {
//     Route::get('dashboard', function () {
//         return 'Logged In';
//     });
//     Route::get('Account', function () {
//         return 'Account Entered!';
//     });
// });

// //Session
// Route::get('/', [Home::class,'index']);
/////////////////////////////////////////////////////////////////////////////////
// Caching
//Route::get('/cache', function () {
    //put

    // $students = students::get();
    // Cache::put('students', $students,600);
    //forever

    // $students = students::get();
    // Cache::put('students', $students);
    //get

    // return Cache::get('students');
    //forget

    // Cache::forget('students');
    //flush
    // Cache::flush();

    //Remember
    // $students = Cache::remember('students', 600, function () {
    //     return students::get();

    // });

//});
//////////////////////////////////////////////////////////////////
// Check Email
// Route::get('/', [HomeCont::class, 'index']);
// //Login Form
// Route::get('login', [loginCont::class, 'index']);
// Route::post('/login', [loginCont::class, 'store'])->name('loginUser');
// //Register Form
// Route::get('register', [registerCont::class, 'index']);
// Route::post('/register', [registerCont::class, 'create'])->name('createUser');

// //middleware
// Route::group(['middleware' => 'checkAuth'], function () {
//     Route::get('dashboard', function () {
//         return 'Logged In';
//     });
//     Route::get('Account', function () {
//         return 'Account Entered!';
//     });
// });
// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//     ], function(){
//        // Route::get('/', [HomeCont::class, 'index']);
// //Login Form
// Route::get('login', [loginCont::class, 'index']);
// Route::post('/login', [loginCont::class, 'store'])->name('loginUser');
// //Register Form
// Route::get('register', [registerCont::class, 'index']);
// Route::post('/register', [registerCont::class, 'create'])->name('createUser');

// //middleware
// Route::group(['middleware' => 'checkAuth'], function () {
//     Route::get('dashboard', function () {
//         return 'Logged In';
//     });
//     Route::get('Account', function () {
//         return 'Account Entered!';
//     });
// });
//     });

Route::get('/',[pagesCont::class,'index']);

Route::get('/blog', [postsCont::class,'index'])->name('open');
Route::get('test/public/blog/create', [postsCont::class,'create']);
Route::post('test/public/blog', [postsCont::class,'store'])->name('save');
Route::get('test/public/blog/{Slug}', [postsCont::class,'display']);
Route::get('test/public/blog/edit/', [postsCont::class,'edit'])->name('editPost');
//Route::post('test/public/blog/{Slug}/update', [postsCont::class,'update']);



//Route::resource('/blog',postController::class);


//Route::resource('/blog',postsCont::class);


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

