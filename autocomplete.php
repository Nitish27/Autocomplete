<!doctype html>
<html>
	<head>
		<meta charset=UTF-8>
		<title>Autocomplete Search</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <body>
        	<div class="container">
        		<h3></h3>
        		<form method="post" action="">
        			<h3>Input Box</h3>
        			<input type="text" id="name" name="name">
        		</form>
        	</div>
        	<script src="js/jquery-min.js"></script>
	        <script src="js/jquery-ui.js"></script>
	        <script>
	        	(function() {
	        		$("#name").autocomplete({
	        			source:'getcomplete.php',
	        			minlength: 1
	        		});
	        	})();
	        </script>
        </body>
	</head>
</html>