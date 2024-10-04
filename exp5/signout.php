<?php 
    session_start();
    echo " <div style='text-align:right'> 
    <a href='homepage.htm'>Home</a></div>"; 
    echo "Thank You !"; 
    $lb = fopen("LogBook.txt","a"); 
    date_default_timezone_set("Asia/Kolkata"); 
    $d = date("d-m-y h:i:s A"); 
    fwrite($lb,$_SESSION["un"]." -> Out Time -> ".$d."\n"); 
    fclose($lb); 
?>
