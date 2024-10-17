<?php
    session_start();
    echo $_SESSION['userName'].", you successfully logout!"."<br>"."<a href='login.php'>Click Here</a> to LogIN Again";
    session_destroy();
?>