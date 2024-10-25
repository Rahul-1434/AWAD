<html>
<head>
    <style>
    .no-border {
        border: 0px solid black;
        text-align:center;
        padding:10px;
    }
    table{
        margin:auto;
        width:40%;
    }
    </style>
</head>
<body>
    <h1 style="color:SeaGreen;text-align:center">Demonstrating uploading data extracted from database</h1>
    <?php
        require "data_extraction.php"
    ?>
    <table class="no-border">
        <tr>
            <td class="no-border"> Export into 
                <a href="excel.php"> Excel </a>
                &nbsp;&nbsp;
                <a href="word.php">Word</a>
                &nbsp;&nbsp;
                <a href="pdf.php">PDF</a>
            </td>
        </tr>
    </table>
</body>
</html>