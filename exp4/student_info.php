<?php
echo "<table align='center' border=1px width=40%>";
echo "<tr><td><label>Fname:</label></td><td>";
echo $_POST['fname'];
echo '</td>';

$fname = $_FILES['uploaded_pic']['name'];
$tfname = $_FILES['uploaded_pic']['tmp_name'];
$loc = 'uploaded_images';
move_uploaded_file($tfname, "$loc/$fname");
echo "<td align='center' rowspan=3 >";
echo "<img src='$loc/$fname' height=100 width=70>";
echo "</td></tr>";

echo "<tr><td><label>Mname</label></td><td>";
echo $_POST['mname'];
echo "</td></tr>";

echo "<tr><td><label>Lname</label></td><td>";
echo $_POST['lname'];
echo "</td></tr>";

echo "<tr><td><label>Surname</label></td><td>";
echo $_POST['surname'];
echo "</td></tr>";

echo "<tr><td><label>Gender</label></td><td>";
echo $_POST['gender'];
echo "</td></tr>";

echo "<tr><td><label>Date of Birth</lable></td><td>";
echo $_POST['dob'];
echo "</td></tr>";

echo "<tr><td><label>E-Mail</lable></td><td>";
echo $_POST['mail'];
echo "</td></tr>";

echo "<tr><td><label>address for communication</lable></td><td>";
echo $_POST['add'];
echo "</td></tr>";

echo "</table>";
?>