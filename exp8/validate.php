<?php
    if(isset($_POST['login']))
    {
    $con=new mysqli('localhost','root','','exp8');
    $user=$_POST['userName'];
    $password=$_POST["password"];
    $rem=$_POST['remember'];
    $sql="select * from users where User_Name='$user' and Password='$password'";
    $rs=$con->query($sql);
    if($rs->num_rows>0)
    {
        session_start();
        $_SESSION['userName']=$user;
        $_SESSION['password']=$password;
        if(isset($_POST['remember']))
        {
            setcookie("userName",$user,time()+60*60*7);
            setcookie("password",$password,time()+60*60*7);
            header('location:welcome.php');
        }
        else{
            echo "Either user name or Password is invalid !"."<br>"."<a href='login.php'>Click here</a>to try again";
        }
    }
    else{
        echo "Either user name or Password is invalid !";
    }
    }
?>