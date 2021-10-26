<?php
    
    include 'connect.php';

    if(isset($_POST['submit'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        if($pass == $repass){
            $sql = "INSERT INTO user(us_name, us_email, us_pass) VALUES ('$name', '$email', '$pass')";
            $qr = mysqli_query($conn, $sql);
            
            header("location: index.php");
        }else {
            header('location: register.php');
        }
        
    }

?>