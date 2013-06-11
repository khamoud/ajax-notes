<?php
	require("connect.php");
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Ajax</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/main.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<div id="wrapper">
		<h1>My Posts: </h1>
<?php
	$query = "SELECT note FROM notes";
	$notes = fetch_all($query);
	foreach($notes as $note)
	{
		echo "<div class='post_note'>" . $note['note'] . "</div>";
	}
?>		
		<div class="clear"></div>
		<form action="process.php" method="post" id="postIt">
			<input type="text" placeholder="Post a note!" name="note"/><br />
			<input type="submit" value="Post it!" />
		</form>
	</div>
</body>
</html>