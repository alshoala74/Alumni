<?php

namespace UTB\models;
use UTB\core\model;

class admin extends model{

  
    public function GetAdmin($name,$password){
        $data= model::db()->row("SELECT * FROM adminuser Where `name` = '$name' && `password` = '$password' ");
        return $data;
     }

}