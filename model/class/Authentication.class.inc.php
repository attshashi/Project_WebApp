<?php
require_once "Member.class.inc.php";
class Authentication extends Member
{
    public function __construct($username,$password){
        if (isset($username) && isset($password)) {
            parent::login($username, $password);
        }
    }

    static function logout()
    {
        session_unset();
        session_destroy();
        header("location:../index.php");
    }
}