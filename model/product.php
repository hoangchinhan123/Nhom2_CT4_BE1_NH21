<?php
class Product extends DB
{
public function getAllProducts()
{
    $sql = self::$connection->prepare("SELECT * FROM products");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getProductById()
{
    $sql = self::$connection->prepare("SELECT * FROM `products` ORDER BY `id` LIMIT 0,10");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getProductById1($id)
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
    $sql->bind_param("i",$id);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function getProductById_TOPSELLING()
{
    $sql = self::$connection->prepare("SELECT * FROM `products` ORDER BY `id` DESC LIMIT 31,10");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function search($keyword)
{
    $sql = self::$connection->prepare("SELECT * FROM products 
    WHERE `name` LIKE ?");
    $keyword = "%$keyword%";
    $sql->bind_param("s", $keyword);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array

}
public function getProductByMaNU_Id($Manu_id)
{
    $sql = self::$connection->prepare("SELECT * FROM products where manu_id = ?");
    
    $sql->bind_param("s", $Manu_id);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getproduct_detail($id){
    $sql = self::$connection->prepare("SELECT * FROM products where id = ?");
    $sql->bind_param("i", $id);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
}
?>