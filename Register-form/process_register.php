 <?php
    $f = $p = $e = $d = "";
    if(isset($_POST['fullname'])){
        $f=$_POST['fullname'];
    }
    if(isset($_POST['password'])){
        $p=$_POST['password'];
    }
    if(isset($_POST['email'])){
        $e=$_POST['email'];
    }
    if(isset($_POST['diachi'])){
        $d=$_POST['diachi'];
    }
    if($f != "" && $p != ""){
        header('location: login.php?fullname='.$f.'&password='.$p);
        die();
    }