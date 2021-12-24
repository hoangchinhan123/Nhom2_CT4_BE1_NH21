<?php
require "config.php";
require "model/db.php";
require "model/product.php";
require "model/Manufacture.php";
require "model/Protypes.php";
$product = new Product;
$Manufacture = new Manu;
$protypes = new Types;
$getAllProducts = $product->getAllProducts();
$getAllManu = $Manufacture->getAllManu();
$getAllTypes = $protypes->getAllTypes();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $manu = $_POST['manu'];
    $protypes = $_POST['protypes'];
    $price = $_POST['price'];
    $Description = $_POST['Description'];
    $feature = $_POST['feature'];
    $created_a = $_POST['created_a'];
    $Image = $_FILES['Image']['name'];
    if($product->addproduct($name ,$manu ,$protypes ,$price ,$Image, $Description ,$feature , $created_a) === TRUE){
      $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["Image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      if ($_FILES["Image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
      if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    }else {
        if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["Image"]["name"])). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }
}
if(isset($_POST['submit1'])){
  $manu_name = $_POST['manu_name'];
  
  if($Manufacture->addManu($manu_name) === TRUE){
    echo "Add data successfully";
  }else{
    echo "Add data failed";
  }
}
if(isset($_POST['submit2'])){
  $type_name = $_POST['type_name'];
  
  if($protypes->addTypes($type_name) === TRUE){
    echo "Add data successfully";
  }else{
    echo "Add data failed";
  }
}