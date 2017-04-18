<?php
spl_autoload_register(function ($class_name)
{
    require_once "/class/".$class_name.".class.inc.php";
});
function getUser($name){
    $con = db::getInstance();
    $res = $con->query("SELECT * FROM member WHERE name LIKE '%$name%'");
    $arr = array();
    while ($row = $res->fetch(PDO::FETCH_NUM)){
        $arr[] = array($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);
    }
    return $arr;
}
?>