<?php

use Pecee\SimpleRouter\SimpleRouter as router;
use src\Core\Helpers;

router::setDefaultNamespace('src\Controllers');


try{
router::get(BASE_URL, 'SiteController@index');
router::get(BASE_URL.'sobre', 'SiteController@sobre');
router::get(BASE_URL.'post/{id}', 'SiteController@post');
router::post(BASE_URL.'search', 'SiteController@search');

router::get(BASE_URL.'/404', 'NotfoundController@index');

router::group(['namespace' => 'Admin'], function () {
    router::get(BASE_URL.'admin/dashbord', 'AdminDashbord@index');
});

router::start();

}catch(Pecee\SimpleRouter\Exceptions\NotFoundHttpException $e){
    if(Helpers::localhost()){
        $e->getMessage();
    }else{
        Helpers::redirecionar('404');
    }
}