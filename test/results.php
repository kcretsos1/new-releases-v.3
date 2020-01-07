<html>
	<head>
	</head>
	<body>
		<?php
			//MAIN						
			//1. include files
			require('includes/db.php'); 
			$sql = "includes/query.sql"; 
			
			//2. connect to database
			$connection = pg_connect("host=$host dbname=$database port=$port user=$user password=$password") 
				or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
			
			//3. run query and print results
			$query = readQuery($sql); //--> calls function
			$results = pg_query($query);		
			$collection = pg_fetch_all($results);		
			printResults($collection); //--> calls function
			
			//4. close database
			pg_close($connection);
			
			//FUNCTIONS
			function readQuery($filename) {
				$fcommand = fopen($filename, "r");
				$query = fread($fcommand, filesize($filename));						
				return $query;
			}
			
			function printResults($collection)	{
				$i = 0;
				while ($i < count($collection)) {
					echo '<a href='.$collection[$i]['catalog_url'].'>'.$collection[$i]['title'].'</a>';
					echo '<br>';
					$i++;
				}
			}	
		?>
	</body>
</html>