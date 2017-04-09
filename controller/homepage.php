<?php
spl_autoload_register(function ($class_name)
{
    require_once "../model/class/".$class_name.".class.inc.php";
});
session_start();
if(isset($_POST["chklogin"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $chklogin = new Authentication($username,$password);
    if(isset($chklogin)){
        $_SESSION["type_user"] = $chklogin->getTypeUser();
        header("location:../index.php");
    }
    else{
        $_SESSION["type_user"] = "";
        header("location:../index.php");
    }
}
if(isset($_GET["logout"])){
    Authentication::logout();
}