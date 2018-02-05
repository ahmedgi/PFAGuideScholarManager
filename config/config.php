<?php
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 07/12/17
 * Time: 11:26
 */

$config=array(
    "host"=>"localhost",
    "dbname"=>"myDB",
    "username"=>"root",
    "password"=>"root"
);

spl_autoload_register(function($class){
    require_once ("classes/".$class.".php");
});