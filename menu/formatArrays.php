<?php
//Format Labels	
$format_labels = array(
				"Books",
				"Electronic Books",
				"Electronic Resources",
				"Video",
				"Audio",
				"Sheet Music",
	);
	
//Format URLs	
$format_URL = array(
				"books",
				"ebooks",
				"eresources",
				"video",
				"audio",
				"sheetmusic",
	);	
	
//Format URLs	
$perPage_scope = array(
				5,
				5,
				5,
				5,
				5,
				5,
	);		

//Format Filters
$format_scope = array(
				" AND brp.material_code = 'a' ", // Books
				" AND brp.material_code = 'u' ", // eBooks
				" AND ((brp.material_code = 'q') OR (brp.material_code = 'l')) ",// eResources
				" AND ((brp.material_code = 'g') OR (brp.material_code = 'w')) ", // Video
				" AND ((brp.material_code = 'i') OR (brp.material_code = 'j') OR (brp.material_code = 'x') OR (brp.material_code = 'y')) ", //Audio
				" AND ((brp.material_code = 'c') OR (brp.material_code = 'd')) ", //Sheet Music			
		);	
	

//Catatloging Date Filter		
$date_scope = array(
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 month'::INTERVAL)", // Books
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 month'::INTERVAL) ", //eBooks
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 week'::INTERVAL) ", //eResources
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '6 month'::INTERVAL) ", //Video
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 year'::INTERVAL) ", //Audio
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 year'::INTERVAL) ", //Sheet Music		
	);	

$groupBy_scope = array(
				" GROUP BY 1,2,3,4,5,6,7,8 ", // Books
				" GROUP BY 1,2,3,4,5,6,7,8 ", //eBooks
				" GROUP BY 1,2,3,4,5,6,7,8 ", //eResources
				" GROUP BY 1,2,3,4,5,6,7,8 ", //Video
				" GROUP BY 1,2,3,4,5,6,7,8 ", //Audio
				" GROUP BY 1,2,3,4,5,6,7,8 ", //Sheet Music	
	);

$orderBy_scope = array(
				" ORDER BY 5 DESC ", // Books
				" ORDER BY 5 DESC ", //eBooks
				" ORDER BY 5 DESC ", //eResources
				" ORDER BY 5 DESC ", //Video
				" ORDER BY 5 DESC ", //Audio
				" ORDER BY 5 DESC ", //Sheet Music		
	);		
			
	?>