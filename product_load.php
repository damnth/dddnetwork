<?php
	include 'db.php';
	$sql = "select * from product";
	$result = $mysqli->query($sql);
	echo $wordecho;
	/*startJSON();
	while($row = $result->fetch_assoc()) {
    }
	endJSON();
	echo $wordecho;*/
?>