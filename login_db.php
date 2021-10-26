<?php
    
    include 'connect.php';
    session_start();

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM user WHERE us_email = '$email' AND us_pass = '$pass' ";
        $qr = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($qr);
        if ($num >=1 ) {
            $rs = mysqli_fetch_assoc($qr);
            $_SESSION['username'] = $rs['us_name'];
            header("location: login-1.php");
        }else {
            echo 'login error';
        }
    }


?>