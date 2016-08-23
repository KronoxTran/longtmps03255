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
    
    $MaSP = mysql_real_escape_string($_POST['MaKH']);
    $TenSP = mysql_real_escape_string($_POST['TenKH']);
    $Gia = mysql_real_escape_string($_POST['Email']);
    $MaLoai = mysql_real_escape_string($_POST['SDT']);
   
    $sql = "INSERT INTO khachhang (MaKH, TenKH, Email , SDT)
    VALUES ('$MaSP', '$TenSP', '$Gia' , '$MaLoai')";

    if ($conn->query($sql) === TRUE) {
        echo "Them bat bai";
    } else {
        echo "Them thanh cong " ;
    }
    $conn->longtmps03255_asm_inf205 = null;
?>