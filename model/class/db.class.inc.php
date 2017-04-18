<?php

/**
 * Created by PhpStorm.
 * User: MrBunny
 * Date: 19/3/2560
 * Time: 16:48
 */
class db
{
    private static $dsn = "mysql:host=localhost;dbname=project_webapp;";
    private static $username = "root";
    private static $password = "";
    private static $instance = Null;

    public static function getInstance()
    {
        if(!self::$instance)
            self::$instance = new PDO(self::$dsn,self::$username,self::$password);
        return self::$instance;
    }
}