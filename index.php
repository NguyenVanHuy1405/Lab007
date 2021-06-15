<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
		<?php 
		
			echo '<p>TEST POSTGRESQL DATABASE </p>'; 
			# DATABASE credential
			$host_heroku = "ec2-3-231-69-204.compute-1.amazonaws.com";
			$db_heroku = "d5boqk3bekfndr";
			$user_heroku = "zweujvxfknurip";
			$pw_heroku = "a34706f696373b39c20d08e062a4bba2c33d0f9febe6eeaa26e77985c92a9e5e";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=user_heroku password=$pw_heroku";
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
			# Get data by query
			$result = pg_query($pg_conn, "select * from product;");
			#var_dump(pg_fetch_all($result));
			
			$numrows = pg_num_rows($result)
		?>
		<table border="1">
		<tr>
		<th>product_id</th>
		<th>product_name</th>
		<th>product_price</th>
		</tr>
		<?php
			// Loop on rows in the result set
			for($row_index = 0; $row_index < $numrows; $row_index++) 
			{
				echo "<tr>\n";
				$row = pg_fetch_array($result, $row_index);
				echo " <td>", $row["product_id"], "</td><td>", 
							  $row["product_name"], "</td><td>", 
							  $row["price"], "</td></tr>";
			}
			pg_close();
		?>
		</table>

	</body>

</html>
