<?php
namespace UTB\core;


class helpers{
    
    public static function redirect($path){
        header('LOCATION:http://alumni.test/'.$path);
    }

   

}