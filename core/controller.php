<?php

require 'templates.php';
require 'config.php';

define('LANG', $config['lang']);
define('BASE_PATH',dirname(__DIR__));

class controller{


    private static $model_path = BASE_PATH . '/models/';
    private static $views_path =  BASE_PATH . '/views/';

    public static function model($model){
        require self::$model_path . $model . '.php';
        return new $model;
    }

    public static function view($view){
        include self::$views_path . $view . '.html';
    }

    public static function view_param($view){
        require BASE_PATH . '/langs/' . LANG . '.php';
        $temp = new Templates($lang);
        $temp->show($view);
    }


}