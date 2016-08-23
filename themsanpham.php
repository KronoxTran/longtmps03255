<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=longtmps03255_asm_inf205", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    
    $MaSP = mysql_real_escape_string($_POST['MaSP']);
    $TenSP = mysql_real_escape_string($_POST['TenSP']);
    $Gia = mysql_real_escape_string($_POST['Gia']);
    $MaLoai = mysql_real_escape_string($_POST['MaLoai']);
   
    $sql = "INSERT INTO sanpham (MaSP, TenSP, Gia , MaLoai)
    VALUES ('$MaSP', '$TenSP', $Gia , $MaLoai)";

    if ($conn->query($sql) === TRUE) {
        echo "Them bat bai";
    } else {
        echo "Them thanh cong " ;
    }
    $conn->longtmps03255_asm_inf205 = null;
?>