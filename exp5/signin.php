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
        $_SESSION["un"] = $rec["name"];
        echo "<div style='text-align:right'> 
              <a href='signout.php' style='text-decoration:none;'>Sign Out</a> 
              </div>"; 
        echo "Welcome ". $rec["name"]; 
        date_default_timezone_set("Asia/Kolkata"); 
        $d = date("d/m/y h:i:s A"); 
        $lb = fopen("LogBook.txt","a"); 
        fwrite($lb,$rec["name"]."-> In Time -> ".$d."\n");
        fclose($lb); 
    } 
    else{ 
        echo "<div style='text-align:center;'>User credentials not matched ! <br> 
                <a href='signin.htm' style='text-decoration:none;font-size:20px'>signin</a> again</div>"; 
    } 
 
?>