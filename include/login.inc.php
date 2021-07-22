<?php
session_start();
if(isset($_POST['login-submit'])){
    include("../config/connection.php");
    $username = $_POST['username'];
    $passwd = $_POST['password'];
    if(empty($username) || empty($passwd)){
        header("Location: ../login?error=emptyfields");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$passwd'";
        $run  = mysqli_query($connection,$sql);
        if($run){
            if(mysqli_num_rows($run) > 0){
                //enter user
                $_SESSION['USERNAME'] = $username;
                header("Location: ../index?login=success");
                exit();
                
            }else{
              header("Location: ../login?error=nouser");
                exit();
            }
        }
    }    
    
}
?>