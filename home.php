<!DOCTYPE html>
<html>
<head>
<title>Roesch Releases</title>
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
	  <link rel="stylesheet" href="css/custom1.css">
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
		//1. INCLUDE FILES
		require('config/db.php'); //Database Credentials
		$sql = "queries/homeQuery.sql"; //SQL file
		require('functions/homeFunctions.php'); //Subject Functions
		ini_set('memory_limit', '1024M'); //increase memory limit if needed		

		//2. SET Results Limit
		$perPage = 9;	
		
		echo "<br>";
		echo "<h3>Roesch Releases</h3>";
		echo "<br>";
		echo "<p>Discover the newest titles added to our library catalog. Use the menu to browse by subject, collection, or format. Click on the book jacket to request, access, or find more information about library holdings.</p><p>To receive automatic emails for lists of new titles, click Subscribe.</p>";
		
		//3. OPEN DATABASE CONNECTION
		$connection = pg_connect("host=$host dbname=$database port=$port user=$user password=$password") 
			or die("Failed to create connection to database: ". pg_last_error(). "<br/>");				

		//4. FILTER QUERY: read the query			
		$query = readQuery($sql);	

		//5. LIMIT QUERY: add perPage and offset limits			
		$query = limitQuery($query, $perPage);			

		$results = pg_query($query);
									
		if (!$results) {
			echo "An error occurred.\n";
			exit;
		}					

		//6. GET QUERY RESULTS							
		$collection = pg_fetch_all($results);
		
		//7. GET TOTAL ROWS: without offset limits added
		$total_rows = getTotalRows($collection); //for counting total results			

		// If total results = 0, DO NOT PRINT
		if (is_null($total_rows)) {
			echo "<br>";
			echo "0 results found.<br>";
		}
		
		// If total results > 0, PRINT
		else if (!is_null($total_rows)) {
			echo "<br>";						
			
			//8. PRINT RESULTS
			// Print table headers
			tableHeaders();
												
			// Print table
			printTable($collection, $perPage, $alias, $secret);	
			
			echo "<br>";								
		} // if at least 1 result
		echo "<br>";	
		
		//9. CLOSE DATABASE CONNECTION
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