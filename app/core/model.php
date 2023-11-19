<?php

namespace UTB\core;

use Dcblogdev\PdoWrapper\Database;

class model{

    static function db(){
        // make a connection to mysql here
        $options = [
        //required
        'username' => 'root',
        'database' => 'alumni',
        //optional
        'password' => '',
        'type' => 'mysql',
        'charset' => 'utf8',
        'host' => 'localhost',
        'port' => '3306'
                 ];
        
        return $db = new Database($options);      
    }
    
        
   
}