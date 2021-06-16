<?php 
		
			echo '<p>TEST POSTGRESQL DATABASE </p>'; 
			# DATABASE credential
			$host_heroku = "ec2-3-231-69-204.compute-1.amazonaws.com";
			$db_heroku = "d5boqk3bekfndr";
			$user_heroku = "zweujvxfknurip";
			$pw_heroku = "a34706f696373b39c20d08e062a4bba2c33d0f9febe6eeaa26e77985c92a9e5e";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
			# Get data by query
			$result = pg_query($pg_conn, "select * from product;");
			#var_dump(pg_fetch_all($result));
			
			$numrows = pg_num_rows($result)
		?>