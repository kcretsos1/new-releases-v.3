<!DOCTYPE html>
<html>
<head>
<title>New Sheet Music</title>
	<?php
		//1. INCLUDE FILES
		require('config/db.php'); //Database Credentials
		$sql = "queries/formatQuery.sql"; //SQL file
		require('functions/formatFunctions.php'); //Functions
		require('menu/formatArrays.php'); //Menu
		ini_set('memory_limit', '1024M'); //increase memory limit if needed		

		//2. SET Location INDEX AND PASS FILTERS
		$index = 5;
		$format_name = $format_labels[$index];
		$url = $format_URL[$index];
		$format = $format_scope[$index];
		$date = $date_scope[$index];
		$groupBy = $groupBy_scope[$index];
		$orderBy = $orderBy_scope[$index];
		$perPage = $perPage_scope[$index];
		// 0. Books
		// 1. EBooks
		// 2. EResources
		// 3. Video
		// 4. Audio
		// 5. Sheet Music
	?>
<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1812745-6', 'auto');
  ga('send', 'pageview');

</script>
-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1812745-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-1812745-6');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/grid/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
				<script src="https://code.jquery.com/jquery-3.4.0.js" ></script>	

      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	  <!-- UD Custom CSS -->
      <link rel="stylesheet" href="css/stylesheet.css">
	  <!-- Our Custom CSS -->
	  <link rel="stylesheet" href="css/custom2.css">
</head>
<style>
</style>

<body>
		<?php 
			include('includes/header.php');
		?>
<!-- start wrapper -->
<div class="d-flex" id="wrapper">

		<?php 
			include('includes/sidebar.php');
		?>

    <!-- start page content wrapper -->
    <div id="page-content-wrapper">

		<?php 
			include('includes/navbar1.php');
		?>
		<!-- start container fluid -->
      <div class="container-fluid">

	<?php		
		echo "<br><h4>New ".$format_name."</h4>";
		
		//3. OPEN DATABASE CONNECTION
		$connection = pg_connect("host=$host dbname=$database port=$port user=$user password=$password") 
			or die("Failed to create connection to database: ". pg_last_error(). "<br/>");	
		
		//4. GET PAGE AND OFFSET	

		if (isset($_GET['p'])) {
			$page = $_GET['p'];
		} 
		else {
			$page = 1;
		}
		
		// Create offset depending on page and results perPage
		$offset = ($page-1) * $perPage;
		if ($offset < 0) {
			$offset = 0;
		}						

		//Get URL with page number
		$url = clean(getPage($url));

		//5. FILTER QUERY: read the query with filters			
		$query = filterQuery($sql, $format, $date, $groupBy, $orderBy);

		$results = pg_query($query);
									
		if (!$results) {
			echo "An error occurred.\n";
			exit;
		}

		$collection = pg_fetch_all($results);

		//6. GET TOTAL ROWS: without offset limits added
		$total_rows = getTotalRows($collection); //for counting total results	

		//Get Newest Date
		$newest = getNewest($collection);			

		//7. LIMIT QUERY: add perPage and offset limits			
		$query = limitQuery($query, $perPage, $offset);			

		// Get results again with new limits
		$results = pg_query($query);
									
		if (!$results) {
			echo "An error occurred.\n";
			exit;
		}					

		//8. GET QUERY RESULTS: with new limits								
		$collection = pg_fetch_all($results);

		// If total results = 0, DO NOT PRINT
		if (is_null($total_rows)) {
			echo "<br>";
			echo "0 results found.<br>";
		}
		
		// If total results > 0, PRINT
		else if (!is_null($total_rows)) {
			echo "<br>";

			//9. GET TOTAL PAGES
			$total_pages = ceil($total_rows/$perPage);
			$adjacents = 2;
										
			// Exit program for unwanted URL manipulation
			if ($page > $total_pages) {
				exit;
			}	

			//10. GET PAGE RANGE for pagination function			
			if ($total_pages <= (1 +($adjacents*2))) {
				$start = 1;
				$end = $total_pages;
			}
										
			else {
				if (($page - $adjacents) > 1) {
					if (($page + $adjacents) < $total_pages) {
						$start = ($page - $adjacents);
						$end = ($page + $adjacents);
					}
					else {
						$start = ($total_pages - (1+($adjacents*2)));
						$end = $total_pages;
					}
				}
											
				else {
					$start = 1;
					$end = (1+($adjacents*2));
				}
			}			
			
			//11. PRINT RESULTS
			// Call paginate function for navigation menu
			paginate($total_pages, $page, $url, $start, $end);						
												
			// Print table headers
			tableHeaders();
												
			// Print table
			printTable($collection, $offset, $total_rows, $alias, $secret);	

			// Call paginate function for navigation menu
			paginate($total_pages, $page, $url, $start, $end);					
			
			echo "Last updated on ".$newest;		
			echo "<br>";
			
		} // if at least 1 result	
		echo "<br>";
		
		//12. CLOSE DATABASE CONNECTION
		pg_close($connection);								
		?>	
      </div> <!-- end container fluid -->
    </div>
	<!-- end page content wrapper -->
  
	</div>
	<!-- end  wrapper -->

</div>	
<!-- end  container -->	

<?php 
	include('includes/footer.php');
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>