
<!-- start sidebar wrapper -->
	<div class="bg-light border-right" id ="sidebar-wrapper">
	<!-- start sidebar group list -->
           <div class="list-group list-group-flush">
               <h5><a href="#classSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">By Subject:</a></h5>
               <ul class="collapse list-unstyled" id="classSubmenu">
				<ul>
				<?php 
				include('menu/bySubject.php');
				?>
				 </ul>
               </ul>
               <h5><a href="#formatSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">By Format:</a></h5>
			   <ul class="collapse list-unstyled" id="formatSubmenu">
			   <ul>
				<?php 
				include('menu/byFormat.php');
				?>					   
               </ul>
			   </ul>
		</div>
		<!-- end sidebar group list -->
</div>
<!-- end sidebar wrapper -->