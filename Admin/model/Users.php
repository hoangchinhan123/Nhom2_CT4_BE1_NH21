<?php
class Users extends Db{
    public function getAllUsers(){
    $sql = self::$connection->prepare("SELECT * FROM users");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
    }
}
?>