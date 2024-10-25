<?php
    header("Content-Type:Application/msword");
    header("Content-Disposition:attachment; Filename=User_Data.doc");
    require "data_extraction.php";
?>