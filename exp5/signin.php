<?php
    require_once "dbconn.php"; 
    session_start(); 
    $uid = $_POST["id"]; 
    $pwd = $_POST["pass"]; 
    $sql = "select name from registration_info where userid='$uid' and password='$pwd'"; 
    $rs = $conn->query($sql); 
    if($rs->num_rows>0) 
    { 
        $rec = $rs->fetch_assoc(); 
        echo "<div style='text-align:right'> 
              <a href='homepage.htm' style='text-decoration:none;'>Sign Out</a> 
              </div>"; 
        echo "Welcome ". $rec["name"]; 
    } 
    else{ 
        echo "<div style='text-align:center;'>User credentials not matched ! <br> 
                <a href='signin.htm' style='text-decoration:none;font-size:20px'>signin</a> again</div>"; 
    } 
 
?>