<?php
    require_once('process_register.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
        }
        .form{
            
            text-align:center;
        }
        .form-group{
            display: flex;
            padding: 20px 0;

        }
        label{
            padding-right: 20px;
        }
        button{
            padding:5px;
            margin-top:20px
        }
    </style>
</head>
<body>
    <div class="container">
         <!--action="login.php"-->
        <form method="POST" class="form" >
            <h2>Đăng kí</h2>
            <div class="form-group">

                <label>Full name</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            <div class="form-group">
                <label>Pass word</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="diachi" class="form-control">
            </div>
            <button type="submit">register</button>
        </form>
    </div>
</body>
</html>