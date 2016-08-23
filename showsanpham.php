<!DOCTYPE html>
<html>
	<title>Danh Sach San Pham</title>
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css">
      <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>
	  <div data-role="page" class="ui-page ui-body-c ui-page-active">
        <div data-role="header" class="ui-bar-a ui-header" role="banner">
          <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Danh Sach San Pham</h1>
          <a href="#" data-icon="back" data-rel="back" title="Go back">Back</a>
        </div>
		
	<body>

		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "longtmps03255_asm_inf205";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		// SQL Query
		$sql = "SELECT * FROM sanpham;";
		$result = $conn->query($sql);
		//Echoing the field column names in a table
		echo "<table>";
		echo "<tr>";
		echo "<th style='width:200px; border:1px solid;'>Ma San Pham</th>";
		echo "<th style='width:200px; border:1px solid;'>Ten San Pham</th>";
		echo "<th style='width:200px; border:1px solid;'>Gia</th>";
		echo "<th style='width:250px; border:1px solid;'>Ma Loai</th>";
		echo "</tr>";
		//Loop through and echo all the records
		while ($row = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td style='width:200px; border:1px solid;text-align:center;'>" . $row['MaSP'] . "</td>";
		echo "<td style='width:200px; border:1px solid;text-align:center;'>" . $row['TenSP'] . "</td>";
		echo "<td style='width:200px; border:1px solid;text-align:center;'>" . $row['Gia'] . "</td>";
		echo "<td style='width:200px; border:1px solid;text-align:center;'>" . $row['MaLoai'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		$conn->close();
		?>
	</body>
	<div data-role="footer" class="ui-bar-a ui-footer" role="contentinfo">
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Longtmps03255</h1>
        </div>
</html>