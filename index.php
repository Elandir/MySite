<?php
include "model.php";
$rows=get_all_rows();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Veebileht (front controller)</title>
</head>
<body>
	<h1>Список всех записей в таблице</h1>
	<ol>

		<li><?php echo "siia paneme kiri1"; ?></li>
		<li><?php echo "siia paneme kiri2"; ?></li>
		<li><?php echo "siia paneme kiri3"; ?></li>
		<li><?php echo "siia paneme kiri4"; ?></li>
	</ol>
	<h1>Список всех записей в таблице2</h1>
	<ol>
		<li><?php echo $rows['title'].'<br>',$rows['text']; ?></li>
		<li><?php echo "siia paneme kiri2"; ?></li>
		<li><?php echo "siia paneme kiri3"; ?></li>
		<li><?php echo "siia paneme kiri4"; ?></li>
	</ol>
<h2>Veel muudatusi</h2>>
</body>
</html>