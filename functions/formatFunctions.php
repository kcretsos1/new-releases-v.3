
		<?php		
		//*********START FUNCTIONS************************************************************************************************************
		function clean($string) {
			$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
			return preg_replace('/[^A-Za-z0-9?.=&\-]/', '', $string); // Removes special chars.
		}
								
		function getPage($u) {				
			$u = $u.".php?&p=";			
			return $u;
		}					

		function filterQuery($filename, $format, $date, $groupBy, $orderBy) {
			// fn = filename, format, d = date
			// Read the SQL file
			$fcommand = fopen($filename, "r");
			$q = fread($fcommand, filesize($filename));				
			// Add  WHERE criteria to SQL file query
			$q .= $format;
			$q .= $date;
			$q .= $groupBy;
			$q .= $orderBy; // order by cataloging date descending (newest to oldest)			
			return $q;
			}					

			function limitQuery($q, $perPage, $offset) {
				// q = query
				// Add limit to SQL query
				$limit = " LIMIT ".$perPage." OFFSET ".$offset." ";
				$q .= $limit;		
				return $q;
			}	

			function getNewest($collection) {
				// return the newest date
				$i = 0;
				$newest = $collection[$i]['cat_date'];
				return $newest;
			}
								
			function getTotalRows($collection) {
				$i = 0;
				$c = $i + 1;

				if(empty($collection)) {
					return null;
				}				
				
				while ($i < (count($collection))) {
					$i++;
					$c++;
					}
					return $i;				
			}					
								
           function tableHeaders() {
            		// Start table headers
            		echo '<table id = "myTable">';
            		echo "<tr>";
            		echo "<th class='.col-'> </th>";
            		echo "<th class='.col-'> </th>";
            		echo "</tr>";
            		// end table headers
            }	

            function printTable($collection, $offset, $total_rows, $user, $password) {				
            		
            		// Loop through each bib record element
            		$i = 0; // limit to perPage
            		$c = 1 + $offset; // loop starts at perPage + OffSet
					while ($i < (count($collection))) { // START LOOP
            			echo '<tr>'; // START ROW
						if ($c <= $total_rows) {
            					printCell($collection, $i, $c, $user, $password);
								}
            					$i++;
            					$c++;
            			echo '</tr>'; // END ROW						
            			//$col = 0;
            		} // END LOOP
            	echo '</table>'; // END TABLE				
            }								
				
								
            function printCell($collection, $i, $c, $user, $password) {
            	if ($i < count($collection)) {			
					echo '<td class=".col-">'; // START COLUMN	
					printBookJacket($collection, $i, $user, $password);
					echo '</td>'; // END COLUMN
					echo '<td class=".col-">'; // START COLUMN	
					getTitle($collection, $i);
					echo '</td>'; // END COLUMN				
            	}
            }
				
            function getTitle($collection, $i) {
            	//$count = 0;
            	if ($i < count($collection)){
					$title = $collection[$i]['title'];
					if (strlen($title) > 120) {
						$title = substr($title,0,120)."...";
					}
            			echo '<a href="'.$collection[$i]['catalog_url'].'rel="noopener noreferrer" target="_blank">'.'<br><u><b>'.$title.'</b></u></a>';
						echo '<br>';
						echo "<small><ul>". nl2br(str_replace('| ', "\n", $collection[$i]['subject'])).'</ul></small>';
            	}
            }			

				function printBookJacket($collection, $i, $user, $password) {
					if ($i <= count($collection)){
						$alt = $collection[$i]['title'];
						$title = $alt;
						$alt = str_replace("'", "", $alt);
										
						if (is_null($collection[$i]['isbn'])) { // NO ISBN FOUND
							//echo '<a href="'.$collection[$i]['catalog_url'].'rel="noopener noreferrer" target="_blank">'."<img src='https://via.placeholder.com/150x200/000000/FFFFFF/?text=+' alt='".$alt."' width='150' height='200' /></a>";
							echo '<a href="'.$collection[$i]['catalog_url'].'rel="noopener noreferrer" target="_blank">'."<img src='images/no-image-available.png' alt='".$alt."' width='150' height='200' /></a>";
							echo '<br><small>'.$collection[$i]['mat_type'].'</small>';
						}
						else	{ // ISBN FOUND	
							$isbn = $collection[$i]['isbn'];
							$isbn_url = getImage($isbn, $user, $password);							
							echo '<a href="'.$collection[$i]['catalog_url'].'rel="noopener noreferrer" target="_blank">'."<img src=".$isbn_url." alt='".$alt."' width='150' height='200' /></a>";
							echo '<br><small>'.$collection[$i]['mat_type'].'</small>';
						}
					}
				}				

				function getImage($isbn, $user, $password) {
					$base = 'https://contentcafe2.btol.com/ContentCafe/Jacket.aspx?';
					$end = array(
						'UserID' => $user,
						'Password' => $password,
						'Return' => 'T',
						'Type' => 'L',
						'Value' => $isbn
					);		
					$url = $base.http_build_query($end);
					return $url;
				}				

				function getFormat($collection, $i) { // GET ICON FOR MATERIAL TYPE
					if ($collection[$i]['mat_type'] == 'book') {
						echo "<img src='images/media_book.gif' alt='Book' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'electronic book') {
						echo "<img src='images/media_ebook.gif' alt='Electronic Book' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'journal') {
						echo "<img src='media_journal.gif' alt='Journal' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'electronic journal') {
						echo "<img src='media_ejournal.gif' alt='Electronic Journal' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'thesis') {
						echo "<img src='media_thesis.gif' alt='Thesis' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'electronic thesis') {
						echo "<img src='media_ethesis.gif' alt='Electronic Thesis' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'music recording') {
						echo "<img src='media_cdmusic.gif' alt='Music Recording' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'streaming music') {
						echo "<img src='media_streamingmusic.gif' alt='Streaming Music' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'video') {
						echo "<img src='media_film.gif' alt='Video' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'streaming video') {
						echo "<img src='media_streamingvideo.gif' alt='Streaming Video' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'non-music audio recording') {
						echo "<img src='media_nonmusicrecording.gif' alt='Non-Music Audio Recording' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'streaming audio') {
						echo "<img src='media_streamingaudio.gif' alt='Streaming Audio' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'electronic resource') {
						echo "<img src='media_eresource.gif' alt='Electronic Resource' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'database') {
						echo "<img src='media_database.gif' alt='Database' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'computer file') {
						echo "<img src='media_computerfile.gif' alt='Computer File' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'microform') {
						echo "<img src='media_microform.gif' alt='Microform' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'instructional material') {
						echo "<img src='media_instructional.gif' alt='Instructional Material' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'mixed material') {
						echo "<img src='media_mixedmat.gif' alt='Mixed Material' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == '3D object') {
						echo "<img src='media_3dobject.gif' alt='Three-Dimensional Object' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == '2D graphic') {
						echo "<img src='media_2dgraphic.gif' alt='Two-Dimensional Graphic' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'map') {
						echo "<img src='media_map.gif' alt='Map' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'map manuscript') {
						echo "<img src='media_map.gif' alt='Map' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'manuscript') {
						echo "<img src='media_manuscript.gif' alt='Manuscript' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'printed music score') {
						echo "<img src='media_printedmusic.gif' alt='Music Score' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'printed music score manuscript') {
						echo "<img src='media_printedmusic.gif' alt='Music Score' width='60' height='60'/>";
					}
					else if ($collection[$i]['mat_type'] == 'kit') {
						echo "<img src='media_kit.gif' alt='Kit' width='60' height='60'/>";
					}
					else {
						echo "<img src='media_other.gif' alt='other resource' width='60' height='60'/>";
					}
				}	
								
								
				function filter($url, $urlP, $urlE) {
				?>
					<!--Create filter URLs-->
					<div class="filter">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Filter Results
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<a class="dropdown-item" href=<?php echo $urlP?>1>Print Books</a>
							<a class="dropdown-item" href=<?php echo $urlE?>1>Electronic Books</a>
							<a class="dropdown-item" href=<?php echo $url?>1>Print and Electronic Books</a>
						</div>
					</div>										
				<?php
				}
								
				// Create pagination navigation menu
				function paginate($tp, $p, $u, $s, $e) {
					// tp = total pages, p = pages, u = url, s = start, e = end
				?>
				<!--Start header pagination menu-->
					<?php if($tp > 1) { ?>
						<ul class="pagination pagination-sm justify-content-left">
							<!-- Link of the first page -->
							<?php //echo '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'; ?>
							<li class='page-item <?php ($p <= 1 ? print 'disabled' : '')?>'>
								<a class='page-link' href='<?php echo $u?>1'><<</a>
							</li>
							<!-- Link of the first page -->
							<li class='page-item <?php ($p <= 1 ? print 'disabled' : '')?>'>
								<a class='page-link' href='<?php echo $u?><?php ($p>1 ? print($p-1) : print 1)?>'>Previous</a>
							</li>
							<!-- Links of the pages with page number -->
							<?php for($i=$s; $i<=$e; $i++) { ?>
								<li class='page-item <?php ($i == $p ? print 'active' : '')?>'>
									<a class='page-link' href='<?php echo $u?><?php echo $i;?>'><?php echo $i;?></a>
								</li>
							<?php } ?>
							<!-- Link of the next page -->
							<li class='page-item <?php ($p >= $tp ? print 'disabled' : '')?>'>
								<a class='page-link' href='<?php echo $u?><?php ($p < $tp ? print($p+1) : print $tp)?>'>Next</a>
							</li>
							<!-- Link of the last page -->
							<li class='page-item <?php ($p >= $tp ? print 'disabled' : '')?>'>
								<a class='page-link' href='<?php echo $u?><?php echo $tp;?>'>>>                      
								</a>
							</li>
						</ul>
							 <!--End header pagination menu-->				
						<?php } 
					}			
								
			//*********END FUNCTIONS************************************************************************************************************		
		?>								