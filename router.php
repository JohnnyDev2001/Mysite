<?php

use Pecee\SimpleRouter\SimpleRouter as router;
use src\Core\Helpers;

router::setDefaultNamespace('src\Controllers');


try{
router::get('/Mysite', 'SiteController@index');
router::get('Mysite/sobre', 'SiteController@sobre');

router::get('/Mysite'.'/404', 'NotfoundController@index');
router::start();

}catch(Pecee\SimpleRouter\Exceptions\NotFoundHttpException $e){
    Helpers::redirecionar('404');
}