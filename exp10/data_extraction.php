<html>
<?php
    require 'dbconn.php';
    session_start();
?>
<head>
    <style>
        table{
            align:center;
            border:1px solid;
        }
        th,td{
            padding: 5px;
            text-align:left;
            font-family:'Times new roman';
            border:1px solid;
        }
    </style>
</head>
<body>
<?php
    $html = "<table border=1 style='width:40%;'cellspacing='5px' cellpadding='5px'>
    <tr align:left>
    <th>#</th>
    <th>Name</th>
    <th>Age</th>
    <th>Gender</th>
    </tr>";
    $rowno = 1;
    $sql = "select * from data";
    $rs = $con->query($sql);
    if($rs->num_rows>0)
        {
        foreach($rs as $rec): 
        $html.="<tr>
        <td>".$rowno++."</td>
        <td>".$rec["Name"]."</td>
        <td>".$rec["Age"]."</td>
        <td>".$rec["Gender"]."</td>
        </tr>";
        endforeach;
        }
    $html.="</table>";
    $_SESSION["data"] = $html;
    echo $html;
?>
</body>
</html>