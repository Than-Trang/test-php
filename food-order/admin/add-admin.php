<?php include('partials/menu.php')?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
</br>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Full name: </td>
                    <td><input type="text" name="full-name" placeholder="Your full name"></td>
                </tr>
                <tr>
                    <td>User name: </td>
                    <td><input type="text" name="user-name" placeholder="Your user name"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Your pass word"></td>
                </tr>
                <tr>
                    <td> <input type="submit" value="Add Admin" style="background: green" class="btn-secondary"> </td>
                  
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include('partials/footer.php')?>
