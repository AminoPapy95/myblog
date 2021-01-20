<?php

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

Route::get('/', function () {
    return view('welcome');
});

/*route::get('/test',function(){
    return 'GET route';
});


 va autoriser toute les méthodes
route::any('/test',function (){
    return "wesh les gars";
});

lorsqu'on va sur l'url test on est redirigé vers l'autre
 route::redirect('/test','/');

pour les formulaire le post
route::post('/store',function (){
    return 'POST route';
});

modifier une ressource
route::put()

 delete pour delete mdr

ici on va récuperer l'id d'un article et autheur
le point ? indique que c'est optionnel
route::get('/articles/{id}/comments/{author?}', function ($id,$author = 'un bg '){
    return $author . ' a ecrit un commentaire sur l\' article numéro '. $id;
});

*/

/* cas ou plusieurs fois meme route
    utiliser prefix
    reponse permet de modifier le statut
    redirect redirection


route::prefix('admin/')->group(function (){
    route::get('users',function (){
        return  response()->json([
            'name' => 'amine',
            'age' => 25,
        ]);
    });

    route::get('articles',function (){
        return 'my articles list';
    });

    route::get('categories',function (){
        return 'my categories list';
    });

});
*/

// nouvelle route

route::get('/test',function () {
    return view('test');
});

