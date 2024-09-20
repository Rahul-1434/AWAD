<?php
require_once "dbconn.php";  
session_start();
$name=$_POST['surname'].'.'.$_POST['fname'].' '.$_POST['mname'].' '.$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$num=$_POST['num'];
$mail=$_POST['mail'];
$fname=$_POST['fathername'];
$fnum=$_POST['fnum'];
$add=$_POST['add'];

$sql="INSERT INTO stu_info(Name,Gender,DOB,MblNo,emailID,Father_Name,Father_MblNo,Address) VALUES ('$name','$gender','$dob',$num,'$mail','$fname',$fnum,'$add')";

if ($conn->query($sql) === TRUE) 
    {
    $conn->query($sql);
    echo "<h1 align='center'><br><br><br><br><br><br><br><br>Registation successfully Done!</h1>";
    }
$sql = "select stuID from stu_info where MblNo='$num'"; 
$rs = $conn->query($sql); 
if($rs->num_rows>0) 
    { 
        $rec = $rs->fetch_assoc(); 
	  echo '<h3 align="center">Your id is:'.$rec["stuID"];
    }
$conn->close();
?>
