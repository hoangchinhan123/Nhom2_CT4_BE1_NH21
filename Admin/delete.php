<?php
require "config.php";
require "model/db.php";
require "model/product.php";
require "model/Manufacture.php";
require "model/Protypes.php";
$product = new Product;
$Manufacture = new Manu;
$protypes = new Types;
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    
    if($product->deleteproduct($id) === TRUE){
      echo "Delete successfully";
    }else{
      echo "Delete Failed";
    }
}
if(isset($_POST['submit1'])){
  $manu_id = $_POST['manu_id'];
  
  if($Manufacture->deleteManufacture($manu_id) === TRUE){
    echo "Delete successfully";
  }else{
    echo "Delete Failed";
  }
}
if(isset($_POST['submit2'])){
  $type_id = $_POST['type_id'];
  
  if($protypes->deleteTypes($type_id) === TRUE){
    echo "Delete successfully";
  }else{
    echo "Delete Failed";
  }
}
    
?>