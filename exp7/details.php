<?php
    require_once "dbconn.php";  
    $uid = $_POST["stuID"]; 
    $pwd = $_POST["pass"]; 
    $sql = "select * from stu_info where stuID='$uid' and password='$pwd'"; 
    $rs = $conn->query($sql); 
    if($rs->num_rows>0) 
    { 
        $rec = $rs->fetch_assoc(); 
        echo "<div style='text-align:right'> 
              <a href='homepage.htm' style='text-decoration:none;'><h3>Sign Out</h3></a> 
              </div>"; 
              
              echo "<table align='center' border=1px width=40%>";
              
              echo "<tr><td colspan=2 align='center'><label><h1>Your Details</h1></label></td>";
              echo "</tr>";
              
              echo "<tr><td><label>Name</label></td><td>";
              echo $rec['Name'];
              echo "</td></tr>";
              
              echo "<tr><td><label>ID</label></td><td>";
              echo $rec['stuID'];
              echo "</td></tr>";
              
              echo "<tr><td><label>Gender</label></td><td>";
              echo $rec['Gender'];
              echo "</td></tr>";

              echo "<tr><td><label>Date of Birth</lable></td><td>";
              echo $rec['DOB'];
              echo "</td></tr>";
              
              echo "<tr><td><label>Mobile Number</label></td><td>";
              echo $rec['MblNo'];
              echo "</td></tr>";
              
              echo "<tr><td><label>E-Mail</lable></td><td>";
              echo $rec['emailID'];
              echo "</td></tr>";

              echo "<tr><td><label>Father Name</label></td><td>";
              echo $rec['Father_Name'];
              echo "</td></tr>";

              echo "<tr><td><label>Father Mobile Number</label></td><td>";
              echo $rec['Father_MblNo'];
              echo "</td></tr>";
              
              echo "<tr><td><label>address for communication</lable></td><td>";
              echo $rec['Address'];
              echo "</td></tr>";
              
              echo "</table>";
    } 
    else{ 
        echo "<div style='text-align:center;'>User credentials not matched ! <br> 
                <a href='id.htm' style='text-decoration:none;font-size:20px'>signin</a> again</div>"; 
    } 
 
?>