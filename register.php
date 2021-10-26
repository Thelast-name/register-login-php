<?php

    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css">

    <title>Register</title>
</head>
<body>
    
    <form class="form-signin format" action="reh_db.php" method="POST">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" class="form-control" placeholder="Username" name="username" require>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
        <label for="inputPassword" class="sr-only">Re-Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="repass" required>
        <a href="login.php">You already have an account</a>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Register</button>
    </form>

</body>
</html>