<?php
require "dbconn.php";
$un = htmlspecialchars($_POST["user_name"]);
//$un = $_POST["user_name"];
$uid = $_POST["user_id"];
$pwd = $_POST["password"];
$rpwd = $_POST["re-password"];
if ($pwd == $rpwd){
    $sql = "insert into User_Data values('$un','$uid','$pwd')";
    if($con->query($sql))
        header("location:welcome.htm");
}
else{
    echo "Password mismatch !<br><br>
    <a href='reg_frm.htm'>Click here</a>, to register again";
}

?>