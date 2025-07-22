<?php
//file index.php
require_once "router.php";
require_once "Model/Bahan.php";
require_once "api_lib.php";

get('/', 'views/home');
get('/Bahan', function()  {
    $bahanBahan = Bahan::get();
    return include 'views/listing_bahan.php';
});
get('/Bahan/$id', function ($id) {
    $bahan = Bahan::find($id);
    if($bahan) {
        return include 'views/show-bahan.php';
    }
    return include 'views/404.php';
});
get('/api/v1/bahan', function(){
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(
        decorate(Bahan::get())
    );
});
get('api/v1/bahan-juga', function (){
    api_response(bahan::get());
});