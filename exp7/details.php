<?php
include 'dbconn.php'; 

if (isset($_GET['stuID'])) {
    $stuID = $_GET['stuID'];
    $sql = "SELECT * FROM stu_info WHERE stuID = $stuID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<table border=1 width=40% align='center'>";
        echo "<tr><td colspan=2 align='center'>";
        echo "<h2>Student Details</h2></td></tr>";
        echo "<tr><td><label>Name</label</td>";
        echo "<td>".htmlspecialchars($row['Name']) . "</td></tr>";
        echo "<tr><td>Student ID:</td> ";
        echo "<td>".htmlspecialchars($row['stuID']) . "</td></tr>";
        echo "<tr><td>Gender:</td> ";
        echo "<td>".htmlspecialchars($row['Gender']) . "</td></tr>";
        echo "<tr><td>Date of Birth:</td>";
        echo "<td>".htmlspecialchars($row['DOB']) . "</tr></tr>";
        echo "<tr><td>Mobile Number:</td>";
        echo "<td>".htmlspecialchars($row['MblNo']) . "</td></tr>";
        echo "<td>Email:</td>";
        echo "<td>".htmlspecialchars($row['emailID']) . "</td></rd>";
        echo "<tr><td>Father's Name:</td> ";
        echo "<td>".htmlspecialchars($row['Father_Name']) . "</td></tr>";
        echo "<tr><td>Father's Mobile Number:</td> ";
        echo "<td>".htmlspecialchars($row['Father_MblNo']) . "</td></tr>";
        echo "<tr><td>Address:</td> ";
        echo "<td>".htmlspecialchars($row['Address']) . "</td>";
        echo"</tr></table>";
    } else {
        echo "No student found with ID $stuID";
    }
} else {
    echo "No Student ID provided.";
}

$conn->close();
?>
