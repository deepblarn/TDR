<?php

/**
 * Created by PhpStorm.
 * User: jaume5900
 * Date: 14/05/2016
 * Time: 22:09
 */
class index{
    
    
    public function check_params($params){
        
        //Login
        if (isset($params['button'])){
            if (empty($params['user'])){
                echo 'error';
            }
        }

        
        
        
        
        
    }

}