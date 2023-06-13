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

Route::get('/', function () {
//    \Spatie\WebhookServer\WebhookCall::create()
//        ->url('http://127.0.0.1:9000/webhooks')
//        ->payload(['key' => 'value'])
//        ->useSecret('sign-using-this-secret')
//        ->dispatch();
//    return view('welcome');
    $template = request()->template;

    $loader = new \Twig\Loader\ArrayLoader([
        'index' => $template,
    ]);
    $twig = new \Twig\Environment($loader);

    return $twig->render('index', [
        "component" => [
            "components" => [
                [
                    "image" => "https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80",
                ],
                [
                    "image" => "https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg",
                ],
            ]
        ]
    ]);
});
