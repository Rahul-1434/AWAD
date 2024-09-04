<?php
include 'dbconn.php';

$name=$_POST['surname'].'.'.$_POST['fname'].' '.$_POST['mname'].' '.$_POST['lname'];
echo $name;
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$num=$_POST['num'];
$mail=$_POST['mail'];
$fname=$_POST['fathername'];
$fnum=$_POST['fnum'];
$add=$_POST['add'];

$sql="INSERT INTO stu_info(Name,Gender,DOB,MblNo,emailID,Father_Name,Father_MblNo,Address) VALUES ('$name','$gender',$dob,$num,'$mail','$fname',$fnum,'$add')";

if ($conn->query($sql) === TRUE) 
    {
    $conn->query($sql);
    echo "record inserted successfully";
    }
else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

$conn->close();
?>
