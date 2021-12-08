<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Normalizer\SlugNormalizer;
use App\Models\Post;

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
    return view('Home',[
    "title"=>"Home"
    ]);
}) ;
Route::get('/about', function () {
    return view('about',[
    "title"=>"About",
    "nama"=> "Ananda Eka",
    "email"=> "nandaeka2212@gmail.com",
    "image"=> "pic.jpg"
    ]);
}) ;

Route::get('/article', [PostController::class, 'index']);




// single post
Route::get('article/{slug}', function ($slug) {
    return view('post',[
    "title"=>" Single Post",
    "post"=> Post::find($slug)

    ]);
}) ;

?>

