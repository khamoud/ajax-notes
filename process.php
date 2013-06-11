<?php
	require("connect.php");
	$note = $_POST['note'];
	$query = "INSERT INTO notes (note)
					 VALUES ('{$note}');";
	mysql_query($query);
	$data['post'] = $_POST['note'];
	
	
	$query = "SELECT note FROM notes";
	$notes = fetch_all($query);
	/*foreach($notes as $note)
	{
		echo "<div class='post_note'>" . $note['note'] . "</div>";
	}*/
	echo json_encode($data);
?>	