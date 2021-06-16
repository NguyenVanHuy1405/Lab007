<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
		<?php 
		
			echo '<p>TEST POSTGRESQL DATABASE </p>'; 
			include("hello.php");
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
			# Get data by query
			$result = pg_query($pg_conn, "select * from product;");
			#var_dump(pg_fetch_all($result));

		?>
		<?php
			include("display.php");
			display_table($result);
			pg_close();
		?>
		

	</body>

</html>