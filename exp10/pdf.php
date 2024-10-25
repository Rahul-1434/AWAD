<?php
    session_start();
    require_once __DIR__.'/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf(['format => A4']);
    $mpdf->setHeader('Module 10 | User Data |PDF');
    $mpdf->setFooter(' | | Page No. {PAGENO}');
    $mpdf->setXY(100,200);
    $content = $_SESSION["data"];
    echo $_SESSION["data"];
    $mpdf->WriteHTML($content);
    $mpdf->Output("data.pdf","D")
?>
