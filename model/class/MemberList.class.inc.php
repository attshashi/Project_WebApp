<?php
spl_autoload_register(function ($class_name)
{
    require_once "/model/class/".$class_name.".class.inc.php";
});
class MemberList
{
    private $member=array();

    public function __construct()
    {
        $con = db::getInstance();
        if($res = $con->query("SELECT * FROM member")) {
            $i=0;
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $this->member[$i] = new Member($row["id_member"] ,$row["username"] ,$row["password"] ,$row["name"] ,$row["surname"] ,$row["tel"] ,$row["email"] ,$row["type_user"]);
                $i++;
            }
        }
    }

    public function getMember() {
        return $this->member;
    }

}