<?php
    session_start();
    echo "<p align='right'><a href='logout.php'>LogOut</a></p>";
    echo "Welcome ".$_SESSION['userName'];
?>