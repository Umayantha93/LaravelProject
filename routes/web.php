<?php

// namespace App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use App\Models\country;
// use App\Models\Photo;
// use App\Models\Video;
use App\Models\Tag;
// use App\Models\Taggable;

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
    return view('welcome');
});

// Route::get('/update', function () {
//     return "hello everyone";
// });

// Route::get('/post/{id}/{name}', [PostsController::class, 'index']);

// Route::resource('posts', PostsController::class);

// route::get('contacts', [PostsController::class, 'contact']);

// route::get('post/{id}', [PostsController::class, 'show_post']);

// |--------------------------------------------------------------------------
// | DATABASE RAW sql Queries
// |--------------------------------------------------------------------------
// |

Route::get('/insert2', function(){
    DB::insert('insert into taggables(tag_id, taggable_id, taggable_type) values(?, ?, ?)',[ 2, 1,'App\Models\Post']);

});

// Route::get('/insert3', function(){
//     DB::insert('insert into role_user(user_id, role_id) values(?, ?)',[ 2, 2]);
// });

// Route::get('/add-post',function(){
//     $post = new Post();
//     $post ->title = 'PHP post 2';
//     $post ->content = 'PHP content for post 2';
//     $post ->save();
// });

// Route::get('/insert', function(){
//     DB::insert('insert into photos(path, imageable_id, imageable_table) values(?, ?, ?)',['umayantha.jpg', 2, 'App\User']);

// });


// Route::get('/add-roles',function(){
//     $post = new Role();
//     $post ->name = 'Subscriber';
//     $post ->save();
// });

Route::get('/add-videos',function(){
    $video = new Video();
    $video ->name = 'Codingfaculty.mov';
    $video ->save();
});

Route::get('/add-tag',function(){
    $tag = new Tag();
    $tag ->name = 'JavaScript';
    $tag ->save();
});

Route::get('/add-taggable',function(){
    $taggable = new Taggable();
    $taggable ->tag_id = 1;
    $taggable ->taggable_id = 1;
    $taggable ->taggable_type = 'App\Models\Video';
    $taggable ->save();
});


// Route::get('/add_con',function(){
//     $cout = new country();
//     $cout ->name = 'PR';
//     $cout ->save();
// });

// Route::get('/add-photos',function(){
//     $cout = new Photo();
//     $cout ->path = 'laravel.jpg';
//     $cout ->imageable_id = 1;
//     $cout ->imageable_type = 'App\Models\Post';
//     $cout ->save();
// });

// Route::get('/add-user',function(){
//     $user = new User();
//     $user ->name = 'Peter William';
//     $user ->email = 'PeterW@gmail.com';
//     $user ->password = '123';
//     $user ->country_id = 2;
//     $user ->save();
// });
// Route::get('/read', function(){
    
//     $result = DB::select('select * from posts where id = ?', [1]);

//     // return $result;
    
    
//     foreach($result as $post){

//         return $post->title;
//     }

// });


// Route::get('/update', function(){

//     $result = DB::update('update posts set title = "updated title" where id = ?', [1]);

//     return $result;
// });

// Route::get('/delete', function(){

//     $deleted = DB::delete('delete from posts where id = ?', [1]);

//     return $deleted;
// });

 
// |--------------------------------------------------------------------------
// | Eloquent ORM -(Object Relational Model)
// |--------------------------------------------------------------------------
// |

// Route::get('/read', function(){

//     $posts = Post::all();

//     // $posts = Post::find(2);

//     return $posts;

//     // foreach($posts as $post)
//     // return $post->title;

// });


// Route::get('/findwhere', function(){

//     $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;

// });

// Route::get('/findmore', function(){
//     $posts = Post::findOrFail(2);

//     // $posts = Post::where('user_count','<', 50)->firstOrFail();

//     return $posts;
// });


// Route::get('/basicinsert', function(){
//     $post = new Post;

//     $post->user_id = 1;
//     $post->title = "JavaScript";
//     $post->content = "JaveScript uses inside the laravel framework time to time";

//     $post->save();
// });

// Route::get('/userinsert', function(){
//     $user = new User;

//     $user->name = 'umayantha';
//     $user->email = "umayantha93@gamil.com";
//     $user->password = "pinamodaya";

//     $user->save();
// });


// Route::get('/userrole', function(){
//     $user = new role_user;

//     $user->user_id = 1;
//     $user->role_id = 2;

//     $user->save();
// });

// Route::get('/basicinsert2', function(){

//     $post = Post::find(2);

//     $post->title = "Going to Update";
//     $post->content = "zoon this laravel gonig to be an awesome framework";

//     $post->save();

// });

// Route::get('/create', function(){

//     Post::create(['user_id' => 1, 'title' => 'the create method', 'content' => 'I\'m learning a lot']);


// });


// Route::get('/update', function(){

//     Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'the php is a greate with laravel']);

// });

// Route::get('/update', function(){

//     Photo::where('id', 2)->update(['imageable_table'=>'App\Post']);

// });

// Route::get('/delete', function(){
//     $post = Post::find(2);

//     $post->delete();
// });

// Route::get('/delete2', function(){
    
//     Post::destroy(3);
//delete multiple
// Post::destroy([4,5]);


// });

// Route::get('/softdeletes', function(){
    
//     Post::find(4)->delete();
// });

// Route::get('/readsoftdeletes', function(){
    
//     // $post = Post::withTrashed()->where('id', 4)->get();

//     // return $post;

//     // $post = Post::onlyTrashed()->get();

//     $post = Post::onlyTrashed()->where('is_admin', 0)->get();

//     return $post;
// });

// Route::get('/restore', function(){

//     $post = Post::withTrashed()->where('is_admin', 0)->restore();

// });

// Route::get('/forcedelete', function(){

//     $post = Post::withTrashed()->where('is_admin', 0)->forceDelete();

// });

// Route::get('/forcedelete', function(){

//     $post = Post::onlyTrashed()->where('is_admin', 0)->forceDelete();

// });

// |--------------------------------------------------------------------------
// | DATABASE RAW sql Queries
// |--------------------------------------------------------------------------
// |

// Route::get('/user/{id}/post', function($id){

//    $posts = User::find($id)->post;

//     return $posts;
// });

// Route::get('/user', function(){
  
//     // $user = App\Models\::all();
//     // dd($user);
//     // return User::find(1)->post;

// });

// Route::get('post/{id}/user', function($id){
    
//     return Post::find($id)->user;

// });

// Route::get('user/{id}/post', function($id){

//     $user = User::find(1);

//     foreach($user->posts as $post){

//         echo $post->title."<br>";

//     }

// });

// Route::get('user/{id}/role', function($id){

//     $user = User::find($id);

//     foreach($user->roles as $role){
//             return $role->name;
//     }
// });


// Route::get('user/pivot', function(){

//     $user = User::find(1);

//     foreach($user->roles as $role){
//         return $role->pivot->created_at; 
//     }
// });


// |--------------------------------------------------------------------------
// | DATABASE ELOQUENT - Relationships 
// |--------------------------------------------------------------------------
// |

// one to one relationships

// Route::get('user/{id}/post', function($id){
//     return User::find($id)->post->content;
// });

// inverse relationships

// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user;
// });

// one to many relationships

// Route::get('/posts', function(){

//     $user = User::find(1);

//     foreach ($user->posts as $post){
//         echo $post->title. "<br>";
//     }

// });

// many to many relationsips

// Route::get('user/{id}/role', function($id){

//     $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

//     return $user;

//     // foreach($user->roles as $role){
//     //     return $role->name;
//     // }
// });


// Accessing the intermediate table / pivot

// Route::get('user/pivot', function(){
//     $user = User::find(1);

//     foreach($user->roles as $role){
//         echo $role->pivot;
//     }
// });

// Route::get('/user/country', function(){
//     $cntry = country::find(2);

//     foreach($cntry->posts as $post) {
//         return $post->title;
//     }
// });


// // Polymorphic Relations

// Route::get('user/photos', function(){

//     $user = User::find(1); 

//     foreach($user->photos as $photo){

//         return $photo->path;

//     }

// });

// Route::get('post/photos', function(){

//     $post = Post::find(1); 

//     foreach($post->photos as $photo){

//         return $photo;

//     }

// });



// Route::get('photo/{id}/post', function($id){

//     $photo = Photo::findOrFail($id);

//     return $photo;

// });


Route::get('/post/tag', function(){

    $post = Post::find(1);

    foreach($post->tags as $tag){
        echo $tag->name;
    }
});

Route::get('/tag/post', function(){

    $tag = Tag::find(2);

    foreach($tag->posts as $post){
        echo $post->title;
    }

});




