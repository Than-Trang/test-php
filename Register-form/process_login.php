<?php
$register_fullname = $register_password = "";
//lay du lieu tu form register sang
if(isset($_GET['fullname'])){
    $register_fullname = $_GET['fullname'];
}
if(isset($_GET['password'])){
    $register_password = $_GET['password'];
}
//lay du lieu tu form login
$fullname = $password ="";
if(isset($_POST['fullname'])){
    $fullname= $_POST['fullname'];
}
if(isset($_POST['password'])){
    $password= $_POST['password'];
}
// check du lieu
if($register_fullname == $fullname && $register_password == $password){
    header('location: welcome.php');
    echo "thanh cong";
    die();
}
else{
    echo "ko thanh cong";
}