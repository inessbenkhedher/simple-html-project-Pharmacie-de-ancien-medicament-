<?php
include('config.php');
     session_start();
    if (isset($_POST["login"])) {
       $email = $_POST["email"];
       $password = $_POST["password"];


        $sql = "SELECT * FROM signup WHERE email = '$email' and password='$password'";

        $result = mysqli_query($conn, $sql);

        $user = mysqli_num_rows($result);

        if ($user==1) {
          
                $_SESSION["email"] = "$email";
                header("Location: indiv.php");
              
            }else{
              header("Location: login.html");
          
    }}
    ?>