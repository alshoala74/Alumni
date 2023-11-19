<?php
 define("DS",DIRECTORY_SEPARATOR);
 define("ROOT",dirname(__DIR__).DS);
 define("APP",ROOT.DS.'app'.DS);
 define("CONFIG",APP.DS.'config'.DS);
 define("CONTROLLERS",APP.DS.'controllers'.DS);
 define("CORE",APP.DS.'core'.DS);
 define("MODELS",APP.DS.'models'.DS);
 define("VIEW",APP.DS.'views'.DS);
 define("DOMAIN_NAME","http://alumni.test/");
 
 define('PATH',DOMAIN_NAME);

 require_once("../vendor/autoload.php");

  $app=new UTB\core\app();