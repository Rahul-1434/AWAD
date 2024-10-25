<?php
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition:attachment; Filename=User_Data.xls");
    require "data_extraction.php";
?>