<?php
require_once "db.class.inc.php";
class Member
{
    private $id_member;
    private $username;
    private $password;
    private $name;
    private $surname;
    private $tel;
    private $email;
    private $type_user;

    public function __construct($id_member, $username, $password, $name, $surname, $tel, $email, $type_user)
    {
        $this->id_member = $id_member;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->tel = $tel;
        $this->email = $email;
        $this->type_user = $type_user;
    }


    protected function login($username,$password){
        $con = db::getInstance();
        $r = $con->query("SELECT * FROM member WHERE username='$username' and password='$password'");
        while($res = $r->fetch(PDO::FETCH_ASSOC)) {
            $this->id_member = $res["id_member"];
            $this->username = $res["username"];
            $this->password = $res["password"];
            $this->name = $res["name"];
            $this->surname = $res["surname"];
            $this->tel = $res["tel"];
            $this->email = $res["email"];
            $this->type_user = $res["type_user"];
        }
    }

    public function getIdMember()
    {
        return $this->id_member;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTypeUser()
    {
        return $this->type_user;
    }

    function __toArray()
{
    return array("id_member" => $this->id_member , "username" => $this->username , "password" => $this->password , "name" => $this->name , "surname" => $this->surname , "tel" => $this->tel , "email" => $this->email ,"type_user" => $this->type_user);
}
}