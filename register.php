<?php

    if(isset($_SESSION['id'])){
        
    header("Location: index.php");
    }

if(isset($_POST['register'])){
    include_once("db.php");
    
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    $password_confirm = strip_tags($_POST['password_confirm']);
    
    $username = stripslashes($_POST['username']);
    $password = stripslashes($_POST['password']);
    $password_confirm = strip_tags($_POST['password_confirm']);
    
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password_confirm = mysqli_real_escape_string($db, $_POST['password_confirm']);
    
    $password = md5($password);
    $password_confirm = md5($password_confirm);
    
    $sql_store = "INSERT into users (username, password) VALUES ('$username', '$password')";
    $sql_fetch_username = "SELECT username FROM users WHERE username = '$username'";
    
    $query_username = mysqli_query($db, sql_fetch_username);
    
    if(mysqli_num_rows($query_username)){
        echo "Username already taken!";
        return;
    }
    if($username ==""){
        echo "Please insert a valid username!";
        return;
    }
    if($password =="" || $password_confirm ==""){
        echo "Please insert a valid password!";
        return;
    }
    if($password != $password_confirm){
        echo "Passwords do not match!";
        return;
    }
    
    mysqli_query($db, $sql_store);
    
    header("Location: index.php");
}
?>

<html>
<head>
            <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="MyStyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Register</title>
    
    </head>
    <body> 
                <h1 style="font-family: Tahoma;">Register a new user</h1>
    <form action="register.php" method="post" enctype="multipart/form-data">
        <input placeholder="Username" name="username" type="text" autofocus>
        <input placeholder="Password" name="password" type="password" autofocus>
        <input placeholder="Confirm Password" name="password_confirm" type="password" autofocus>
        <input name="register" type="submit" value="Register">
        </form>
    </body>
</html>
