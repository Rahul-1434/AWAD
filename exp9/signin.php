<?php
require 'dbconn.php';
$uid = mysqli_real_escape_string($con, $_POST["user_id"]);
$password = mysqli_real_escape_string($con, $_POST["password"]);
$uid = $_POST["user_id"];
$password = $_POST["password"];
echo $uid." / ".$password;
$sql = "select * from user_data where userId = '$uid' and password='$password'";
$rs = $con->query($sql);
if($rs->num_rows>0)
{
    $rec = $rs->fetch_assoc();
    echo "<div style='text-align:right'>
    <a href='home_page.htm'>Sign Out<a/>
    </div>
    ";
    echo "Welcome, ".$rec["userName"] ;
    echo "<br><br> Query Used : $sql";
}
else{
    echo "<div style='text-align:right'>
    <font size=4>
    <a href='home_page.htm'>SignOut<a/>
    /
    <a href='home_page.htm'>SignIn<a/>
    </div>";
    echo "Invalid user credentials
    <br><br> Please <a href='signin.htm'> Signin</a> again.</a></font>";
}
?>