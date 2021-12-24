<?php
class Product extends Db
{
public function getAllProducts()
{
    $sql = self::$connection->prepare("SELECT * FROM products");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function addproduct($name ,$manu ,$protypes ,$price ,$Image, $Description ,$feature, $created_a)
{
    $sql = self::$connection->prepare("INSERT INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_a`) 
    VALUES (?,?,?,?,?,?,?,?)");
    
    $sql->bind_param("siiissis", $name ,$manu ,$protypes ,$price ,$Image, $Description ,$feature, $created_a);
    return $sql->execute(); //return an object
}
public function updateproduct($name ,$manu ,$protypes ,$price ,$Image, $Description ,$feature, $created_a, $id)
{
    $sql = self::$connection->prepare("UPDATE `products` SET `name`= ?,`manu_id`= ?,`type_id`= ?,`price`= ?,`image`= ?,`description`= ?,`feature`= ?,`created_a`= ? WHERE `id`= ?");
    
    $sql->bind_param("siiissisi", $name ,$manu ,$protypes ,$price ,$Image, $Description ,$feature, $created_a, $id);
    return $sql->execute(); //return an object
}
public function deleteproduct($id)
{
    $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id`= ?");
    
    $sql->bind_param("i", $id);
    return $sql->execute(); //return an object
}
public function getcountProducts()
{
    $sql = self::$connection->prepare("SELECT COUNT(id) FROM products");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getProductByMaNU_Id($Manu_id)
{
    $sql = self::$connection->prepare("SELECT * FROM products where manu_id = ?");
    
    $sql->bind_param("i", $Manu_id);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
}
?>