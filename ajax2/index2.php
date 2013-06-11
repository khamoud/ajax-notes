<?php
	require("connect2.php");
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>AJAX intermediate</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/main.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/main2.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.datepicker').datepicker();
			
			$('#search_text').keyup(function(){
				$('#ajax').submit();
			});
		
		
			$('#ajax').submit(function(){
				$.post(
					$(this).attr('action'),
					$(this).serialize(),
					function(data){
						$('#results').html(data.html);
					},
					"json"
				);
				return false;
			});
		$('#ajax').submit();
		});
	
	</script>
</head>
<body>
	<form action="process2.php" id="ajax" method="post">
		Name:<input type="text" id="search_text" name="name" />
		From: <input type="text" class="datepicker" name="from_date"/>
		To: <input type="text" class="datepicker" name="to_date"/>
		<input type="submit" value="Submit" />
	</form>
	<div id="results">
	</div>
</body>
</html>