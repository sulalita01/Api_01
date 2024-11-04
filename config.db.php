<?php

    //การเข้ารหัสความปลอดภัย
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods:GET, POST, OPTIONS PATCH, PUT, DETECT');
    header('Access-Control-Allow-Headers:token,Content-Type');
    header('Access-Control-Max-Age:1278000');
    header('Content-Lenght:0');
    header('Conntent-Type: text/plain');

    //การประกาศตัวแปร ในการเชื่อมต่อระบบฐานข้อมูล
    $hostAPI = "localhost";
    $userAPI = "root";
    $passAPI = "";
    $dbnameAPI = "class23";

    //เชื่อมต่อฐานข้อมูล
    $conn = mysqli_connect($hostAPI,$userAPI,$passAPI,$dbnameAPI) 
    or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");

    mysqli_set_charset($conn,"utf8");



