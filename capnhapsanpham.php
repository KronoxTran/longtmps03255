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
   
    $sql = "UPDATE sanpham SET TenSP=$TenSP , Gia=$Gia , MaLoai=$MaLoai WHERE MaSP = $MaSP";

    if ($conn->query($sql) === TRUE) {
        echo "Cap nhap bat bai";
    } else {
        echo "Cap nhap thanh cong " ;
    }
    $conn->longtmps03255_asm_inf205 = null;
?>