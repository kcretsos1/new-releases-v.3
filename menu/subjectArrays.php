<?php

//$perPage ="";
//$offset="";
//$limit ="";
// Subject Labels	
$subject_labels = array(
				"Agriculture",
				"Anthropology and Archaeology",
				"Art",
				"Astronomy",
				"Biology",
				"Business and Management",
				"Chemistry",
				"Computer Science and Mathematics",
				"Earth and Environmental Sciences",				
				"Economics",
				"Education",				
				"Engineering and Technology",
				"Food and Home Economics",
				"History",
				"Humanities and Library Science",
				"Language and Literature",
				"Law",					
				"Medicine",
				"Military Science",		
				"Music",				
				"Philosophy",
				"Photography",
				"Physics",
				"Political Science",
				"Psychology",
				"Recreation and Leisure",
				"Religion",
				"Science and Technology",
				"Social Sciences"
	);
	
// Subject URLs	
$subject_URL = array(
				"agriculture",
				"anthropology",
				"art",
				"astronomy",
				"biology",
				"business",
				"chemistry",
				"computer",
				"earth",				
				"economics",
				"education",				
				"engineering",
				"food",
				"history",
				"humanities",
				"language",
				"law",					
				"medicine",
				"military",		
				"music",				
				"philosophy",
				"photography",
				"physics",
				"political",
				"psychology",
				"recreation",
				"religion",
				"science",
				"social"
	);

// perPage scope	
$perPage_scope = array(
				9,
				9,
				9,
				9,
				9,
				9,
				9,
				9,
				9,				
				9,
				9,				
				9,
				9,
				9,
				9,
				9,
				9,					
				9,
				9,		
				9,				
				9,
				9,
				9,
				9,
				9,
				9,
				9,
				9,
				9
	);		

//Call Number Filter	
$call_num_scope = array(
				" AND (UPPER(a.call_number_prefix) = 'S' OR UPPER(a.call_number_prefix) LIKE 'SB%' OR UPPER(a.call_number_prefix) LIKE 'SD%' OR UPPER(a.call_number_prefix) LIKE 'SF%' OR UPPER(a.call_number_prefix) LIKE 'SH%') ", // Agriculture
				" AND (UPPER(a.call_number_prefix) = 'C' OR UPPER(a.call_number_prefix) LIKE 'CB%' OR UPPER(a.call_number_prefix) LIKE 'CC%' OR UPPER(a.call_number_prefix) LIKE 'CD%' OR UPPER(a.call_number_prefix) LIKE 'CE%' OR UPPER(a.call_number_prefix) LIKE 'CJ%' OR UPPER(a.call_number_prefix) LIKE 'CN%' OR UPPER(a.call_number_prefix) LIKE 'CR%' OR UPPER(a.call_number_prefix) LIKE 'CS%' OR UPPER(a.call_number_prefix) LIKE 'GN%' OR UPPER(a.call_number_prefix) LIKE 'GR%' OR UPPER(a.call_number_prefix) LIKE 'GT%') ", // Anthropology, Archaeology, and Geography
				" AND (UPPER(a.call_number_prefix) LIKE 'N%' OR UPPER(a.call_number_prefix) LIKE 'TT%') ", //Art
				" AND UPPER(a.call_number_prefix) LIKE 'QB%' ", // Astronomy
				" AND (UPPER(a.call_number_prefix) LIKE 'QH%' OR UPPER(a.call_number_prefix) LIKE 'QK%' OR UPPER(a.call_number_prefix) LIKE 'QL%' OR UPPER(a.call_number_prefix) LIKE 'QR%' OR UPPER(a.call_number_prefix) LIKE 'QM%' OR UPPER(a.call_number_prefix) LIKE 'QP%') ", // Biology
				" AND (UPPER(a.call_number_prefix) LIKE 'HD%' OR UPPER(a.call_number_prefix) LIKE 'HF%') ", // Business/Management
				" AND UPPER(a.call_number_prefix) LIKE 'QD%'  ", // Chemistry
				" AND (UPPER(a.call_number_prefix) LIKE 'QA%' OR UPPER(a.call_number_prefix) LIKE 'HA%') ", //Computer Science and Mathematics
				" AND (UPPER(a.call_number_prefix) = 'G' OR UPPER(a.call_number_prefix) LIKE 'GA%' OR UPPER(a.call_number_prefix) LIKE 'GB%' OR UPPER(a.call_number_prefix) LIKE 'GC%' OR UPPER(a.call_number_prefix) LIKE 'GE%' OR UPPER(a.call_number_prefix) LIKE 'GF%' OR UPPER(a.call_number_prefix) LIKE 'QE%' OR UPPER(a.call_number_prefix) LIKE 'TD%' )  ", // Earth and Environmental Sciences	
				" AND (UPPER(a.call_number_prefix) LIKE 'HG%' OR UPPER(a.call_number_prefix) LIKE 'HJ%' OR UPPER(a.call_number_prefix) LIKE 'HX%') ", // Economics
				" AND UPPER(a.call_number_prefix) LIKE 'L%' ", //Education			
				" AND (UPPER(a.call_number_prefix) LIKE 'TA%' OR UPPER(a.call_number_prefix) LIKE 'TC%' OR UPPER(a.call_number_prefix) LIKE 'TF%' OR UPPER(a.call_number_prefix) LIKE 'TH%' OR UPPER(a.call_number_prefix) LIKE 'TJ%' OR UPPER(a.call_number_prefix) LIKE 'TK%' OR UPPER(a.call_number_prefix) LIKE 'TL%' OR UPPER(a.call_number_prefix) LIKE 'TN%' OR UPPER(a.call_number_prefix) LIKE 'TP%' OR UPPER(a.call_number_prefix) LIKE 'TS%') ", // Engineering (Other)
				" AND UPPER(a.call_number_prefix) LIKE 'TX%'", // Food and Home Economics
				" AND (UPPER(a.call_number_prefix) LIKE 'D%' OR UPPER(a.call_number_prefix) LIKE 'E%' OR UPPER(a.call_number_prefix) LIKE 'F%') ", // History
				" AND (UPPER(a.call_number_prefix) LIKE 'A%' OR UPPER(a.call_number_prefix) LIKE 'Z') ", // Humanities and Library Science
				" AND (UPPER(a.call_number_prefix) = 'P' OR UPPER(a.call_number_prefix) LIKE 'PA' OR UPPER(a.call_number_prefix) LIKE 'PB' OR UPPER(a.call_number_prefix) LIKE 'PC' OR UPPER(a.call_number_prefix) LIKE 'PD' OR UPPER(a.call_number_prefix) LIKE 'PE' OR UPPER(a.call_number_prefix) LIKE 'PF' OR UPPER(a.call_number_prefix) LIKE 'PG' OR UPPER(a.call_number_prefix) LIKE 'PH' OR UPPER(a.call_number_prefix) LIKE 'PJ' OR UPPER(a.call_number_prefix) LIKE 'PK' OR UPPER(a.call_number_prefix) LIKE 'PL' OR UPPER(a.call_number_prefix) LIKE 'PM' OR UPPER(a.call_number_prefix) LIKE 'PN' OR UPPER(a.call_number_prefix) LIKE 'PQ' OR UPPER(a.call_number_prefix) LIKE 'PR' OR UPPER(a.call_number_prefix) LIKE 'PS' OR UPPER(a.call_number_prefix) LIKE 'PT' OR UPPER(a.call_number_prefix) LIKE 'PZ') ", //Language and Literature
				" AND UPPER(a.call_number_prefix) LIKE 'K%'", // Law			
				" AND UPPER(a.call_number_prefix) LIKE 'R%'", // Medicine
				" AND (UPPER(a.call_number_prefix) LIKE 'U%' OR UPPER(a.call_number_prefix) LIKE 'V%') ", // Military Science
				" AND UPPER(a.call_number_prefix) LIKE 'M%' ", // Music
				" AND (UPPER(a.call_number_prefix) = 'B' OR UPPER(a.call_number_prefix) LIKE 'BC%' OR UPPER(a.call_number_prefix) LIKE 'BD%' OR UPPER(a.call_number_prefix) LIKE 'BH%' OR UPPER(a.call_number_prefix) LIKE 'BJ%') ", // Philosophy
				" AND UPPER(a.call_number_prefix) LIKE 'TR%' ", //Photography
				" AND UPPER(a.call_number_prefix) LIKE 'QC%' ", // Physics
				" AND UPPER(a.call_number_prefix) LIKE 'J%' ", // Political Science
				" AND UPPER(a.call_number_prefix) LIKE 'BF%' ", //Psychology
				" AND (UPPER(a.call_number_prefix) LIKE 'GV%' OR UPPER(a.call_number_prefix) LIKE 'SK%') ", // Recreation/Leisure
				" AND (UPPER(a.call_number_prefix) LIKE 'BL%' OR UPPER(a.call_number_prefix) LIKE 'BM%' OR UPPER(a.call_number_prefix) LIKE 'BP%' OR UPPER(a.call_number_prefix) LIKE 'BQ%' OR UPPER(a.call_number_prefix) LIKE 'BR%' OR UPPER(a.call_number_prefix) LIKE 'BS%' OR UPPER(a.call_number_prefix) LIKE 'BT%' OR UPPER(a.call_number_prefix) LIKE 'BV%' OR UPPER(a.call_number_prefix) LIKE 'BX%') ", // Religion
				" AND (UPPER(a.call_number_prefix) = 'Q' OR UPPER(a.call_number_prefix) = 'T') ", // Science/Technology
				" AND (UPPER(a.call_number_prefix) = 'H' OR UPPER(a.call_number_prefix) LIKE 'HE%' OR UPPER(a.call_number_prefix) LIKE 'HM%' OR UPPER(a.call_number_prefix) LIKE 'HN%' OR UPPER(a.call_number_prefix) LIKE 'HQ%' OR UPPER(a.call_number_prefix) LIKE 'HS%' OR UPPER(a.call_number_prefix) LIKE 'HT%' OR UPPER(a.call_number_prefix) LIKE 'HV%') " // Social Sciences
	);	
	

//Catatloging Date Filter		
$date_scope = array(
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 year'::INTERVAL)  ", // Agriculture
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 year'::INTERVAL)  ", // Anthropology, Archaeology
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL) ", //Art
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 year'::INTERVAL) ", // Astronomy
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL) ", // Biology
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 month'::INTERVAL) ", // Business/Management
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL) ", // Chemistry
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 month'::INTERVAL) ", //Computer Science and Mathematics
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL)  ", // Earth and Environmental Sciences	
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '5 month'::INTERVAL) ", // Economics
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL) ", //Education			
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 month'::INTERVAL) ", // Engineering
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '2 year'::INTERVAL) ", // Food and Home Economics
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '6 month'::INTERVAL) ", // History
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL) ", // Humanities and Library Science
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '4 month'::INTERVAL) ", //Language and Literature
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '5 month'::INTERVAL) ", // Law			
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '3 month'::INTERVAL) ", // Medicine
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL) ", // Military Science
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL) ", // Music
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '9 month'::INTERVAL) ", // Philosophy
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '6 month'::INTERVAL) ", //Photography
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '9 month'::INTERVAL) ", // Physics
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '6 month'::INTERVAL) ", // Political Science
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL) ", //Psychology
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '1 year'::INTERVAL) ", // Recreation/Leisure
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '9 month'::INTERVAL) ", // Religion
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '6 month'::INTERVAL) ", // Science/Technology
				" AND (b.cataloging_date_gmt <= NOW() AND b.cataloging_date_gmt >= NOW() - '4 month'::INTERVAL) " // Social Sciences
	);		
	
	
$format_scope = array(
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u'))  ", // Agriculture
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u'))  ", // Anthropology, Archaeology
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", //Art
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Astronomy
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Biology
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Business/Management
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Chemistry
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", //Computer Science and Mathematics
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u'))  ", // Earth and Environmental Sciences	
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Economics
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", //Education			
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Engineering
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Food and Home Economics
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // History
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Humanities and Library Science
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", //Language and Literature
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Law			
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Medicine
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Military Science
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Music
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Philosophy
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", //Photography
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Physics
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Political Science
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", //Psychology
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Recreation/Leisure
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Religion
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) ", // Science/Technology
				" AND ((brp.material_code = 'a') OR (brp.material_code = 'u')) " // Social Sciences			
		);
		
$format_scopeP = array(
				" AND ((brp.material_code = 'a'))  ", // Agriculture
				" AND ((brp.material_code = 'a'))  ", // Anthropology, Archaeology
				" AND ((brp.material_code = 'a')) ", //Art
				" AND ((brp.material_code = 'a')) ", // Astronomy
				" AND ((brp.material_code = 'a')) ", // Biology
				" AND ((brp.material_code = 'a')) ", // Business/Management
				" AND ((brp.material_code = 'a')) ", // Chemistry
				" AND ((brp.material_code = 'a')) ", //Computer Science and Mathematics
				" AND ((brp.material_code = 'a'))  ", // Earth and Environmental Sciences	
				" AND ((brp.material_code = 'a')) ", // Economics
				" AND ((brp.material_code = 'a')) ", //Education			
				" AND ((brp.material_code = 'a')) ", // Engineering
				" AND ((brp.material_code = 'a')) ", // Food and Home Economics
				" AND ((brp.material_code = 'a')) ", // History
				" AND ((brp.material_code = 'a')) ", // Humanities and Library Science
				" AND ((brp.material_code = 'a')) ", //Language and Literature
				" AND ((brp.material_code = 'a')) ", // Law			
				" AND ((brp.material_code = 'a')) ", // Medicine
				" AND ((brp.material_code = 'a')) ", // Military Science
				" AND ((brp.material_code = 'a')) ", // Music
				" AND ((brp.material_code = 'a')) ", // Philosophy
				" AND ((brp.material_code = 'a')) ", //Photography
				" AND ((brp.material_code = 'a')) ", // Physics
				" AND ((brp.material_code = 'a')) ", // Political Science
				" AND ((brp.material_code = 'a')) ", //Psychology
				" AND ((brp.material_code = 'a')) ", // Recreation/Leisure
				" AND ((brp.material_code = 'a')) ", // Religion
				" AND ((brp.material_code = 'a')) ", // Science/Technology
				" AND ((brp.material_code = 'a')) " // Social Sciences			
		);

$format_scopeE = array(
				" AND ((brp.material_code = 'u'))  ", // Agriculture
				" AND ((brp.material_code = 'u'))  ", // Anthropology, Archaeology
				" AND ((brp.material_code = 'u')) ", //Art
				" AND ((brp.material_code = 'u')) ", // Astronomy
				" AND ((brp.material_code = 'u')) ", // Biology
				" AND ((brp.material_code = 'u')) ", // Business/Management
				" AND ((brp.material_code = 'u')) ", // Chemistry
				" AND ((brp.material_code = 'u')) ", //Computer Science and Mathematics
				" AND ((brp.material_code = 'u'))  ", // Earth and Environmental Sciences	
				" AND ((brp.material_code = 'u')) ", // Economics
				" AND ((brp.material_code = 'u')) ", //Education			
				" AND ((brp.material_code = 'u')) ", // Engineering
				" AND ((brp.material_code = 'u')) ", // Food and Home Economics
				" AND ((brp.material_code = 'u')) ", // History
				" AND ((brp.material_code = 'u')) ", // Humanities and Library Science
				" AND ((brp.material_code = 'u')) ", //Language and Literature
				" AND ((brp.material_code = 'u')) ", // Law			
				" AND ((brp.material_code = 'u')) ", // Medicine
				" AND ((brp.material_code = 'u')) ", // Military Science
				" AND ((brp.material_code = 'u')) ", // Music
				" AND ((brp.material_code = 'u')) ", // Philosophy
				" AND ((brp.material_code = 'u')) ", //Photography
				" AND ((brp.material_code = 'u')) ", // Physics
				" AND ((brp.material_code = 'u')) ", // Political Science
				" AND ((brp.material_code = 'u')) ", //Psychology
				" AND ((brp.material_code = 'u')) ", // Recreation/Leisure
				" AND ((brp.material_code = 'u')) ", // Religion
				" AND ((brp.material_code = 'u')) ", // Science/Technology
				" AND ((brp.material_code = 'u')) " // Social Sciences			
		);		
		
$groupBy_scope = array(
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Agriculture
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Anthropology, Archaeology
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", //Art
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Astronomy
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Biology
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Business/Management
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Chemistry
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", //Computer Science and Mathematics
				" GROUP BY 1,2,3,4,5,6,7,8,9,10  ", // Earth and Environmental Sciences	
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Economics
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", //Education			
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Engineering
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Food and Home Economics
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // History
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Humanities and Library Science
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", //Language and Literature
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Law			
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Medicine
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Military Science
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Music
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Philosophy
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", //Photography
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Physics
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Political Science
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", //Psychology
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Recreation/Leisure
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Religion
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 ", // Science/Technology
				" GROUP BY 1,2,3,4,5,6,7,8,9,10 " // Social Sciences		
		);

$orderBy_scope = array(
				" ORDER BY 5 DESC  ", // Agriculture
				" ORDER BY 5 DESC  ", // Anthropology, Archaeology
				" ORDER BY 5 DESC ", //Art
				" ORDER BY 5 DESC ", // Astronomy
				" ORDER BY 5 DESC ", // Biology
				" ORDER BY 5 DESC ", // Business/Management
				" ORDER BY 5 DESC ", // Chemistry
				" ORDER BY 5 DESC ", //Computer Science and Mathematics
				" ORDER BY 5 DESC  ", // Earth and Environmental Sciences	
				" ORDER BY 5 DESC ", // Economics
				" ORDER BY 5 DESC ", //Education			
				" ORDER BY 5 DESC ", // Engineering
				" ORDER BY 5 DESC ", // Food and Home Economics
				" ORDER BY 5 DESC ", // History
				" ORDER BY 5 DESC ", // Humanities and Library Science
				" ORDER BY 5 DESC ", //Language and Literature
				" ORDER BY 5 DESC ", // Law			
				" ORDER BY 5 DESC ", // Medicine
				" ORDER BY 5 DESC ", // Military Science
				" ORDER BY 5 DESC ", // Music
				" ORDER BY 5 DESC ", // Philosophy
				" ORDER BY 5 DESC ", //Photography
				" ORDER BY 5 DESC ", // Physics
				" ORDER BY 5 DESC ", // Political Science
				" ORDER BY 5 DESC ", //Psychology
				" ORDER BY 5 DESC ", // Recreation/Leisure
				" ORDER BY 5 DESC ", // Religion
				" ORDER BY 5 DESC ", // Science/Technology
				" ORDER BY 5 DESC " // Social Sciences		
		);

//$limitBy_scope = array(
//				" LIMIT ".$perPage." OFFSET ".$offset." ", // Agriculture
//				" LIMIT BY $limit OFFSET $offset ", // Anthropology, Archaeology
//				" LIMIT BY $limit OFFSET $offset ", //Art
//				" LIMIT BY $limit OFFSET $offset ", // Astronomy
//				" LIMIT $perPage OFFSET $offset ", // Biology
//				" LIMIT BY $limit OFFSET $offset ", // Business/Management
//				" LIMIT BY $limit OFFSET $offset ", // Chemistry
//				" LIMIT BY $limit OFFSET $offset ", //Computer Science and Mathematics
//				" LIMIT BY $limit OFFSET $offset  ", // Earth and Environmental Sciences	
//				" LIMIT BY $limit OFFSET $offset ", // Economics
	//			" LIMIT BY $limit OFFSET $offset ", //Education			
		//		" LIMIT BY $limit OFFSET $offset ", // Engineering
//				" LIMIT BY $limit OFFSET $offset ", // Food and Home Economics
//				" LIMIT BY $limit OFFSET $offset ", // History
//				" LIMIT BY $limit OFFSET $offset ", // Humanities and Library Science
//				" LIMIT BY $limit OFFSET $offset ", //Language and Literature
//				" LIMIT BY $limit OFFSET $offset ", // Law			
//				" LIMIT BY $limit OFFSET $offset ", // Medicine
//				" LIMIT BY $limit OFFSET $offset ", // Military Science
//				" LIMIT BY $limit OFFSET $offset ", // Music
//				" LIMIT BY $limit OFFSET $offset ", // Philosophy
//				" LIMIT BY $limit OFFSET $offset ", //Photography
//				" LIMIT BY $limit OFFSET $offset ", // Physics
//				" LIMIT BY $limit OFFSET $offset ", // Political Science
//				" LIMIT BY $limit OFFSET $offset ", //Psychology
//				" LIMIT BY $limit OFFSET $offset ", // Recreation/Leisure
//				" LIMIT BY $limit OFFSET $offset ", // Religion
//				" LIMIT BY $limit OFFSET $offset ", // Science/Technology
//				" LIMIT BY $limit OFFSET $offset " // Social Sciences		
//		);		

$format1_scope = array(
				"a", // Agriculture
				"a", // Anthropology, Archaeology
				"a", //Art
				"a", // Astronomy
				"a", // Biology
				"a", // Business/Management
				"a", // Chemistry
				"a", //Computer Science and Mathematics
				"a", // Earth and Environmental Sciences	
				"a", // Economics
				"a", //Education			
				"a", // Engineering
				"a", // Food and Home Economics
				"a", // History
				"a", // Humanities and Library Science
				"a", //Language and Literature
				"a", // Law			
				"a", // Medicine
				"a", // Military Science
				"a", // Music
				"a", // Philosophy
				"a", //Photography
				"a", // Physics
				"a", // Political Science
				"a", //Psychology
				"a", // Recreation/Leisure
				"a", // Religion
				"a", // Science/Technology
				"a" // Social Sciences		
		);

$format2_scope = array(
				"u", // Agriculture
				"u", // Anthropology, Archaeology
				"u", //Art
				"u", // Astronomy
				"u", // Biology
				"u", // Business/Management
				"u", // Chemistry
				"u", //Computer Science and Mathematics
				"u", // Earth and Environmental Sciences	
				"u", // Economics
				"u", //Education			
				"u", // Engineering
				"u", // Food and Home Economics
				"u", // History
				"u", // Humanities and Library Science
				"u", //Language and Literature
				"u", // Law			
				"u", // Medicine
				"u", // Military Science
				"u", // Music
				"u", // Philosophy
				"u", //Photography
				"u", // Physics
				"u", // Political Science
				"u", //Psychology
				"u", // Recreation/Leisure
				"u", // Religion
				"u", // Science/Technology
				"u" // Social Sciences		
		);		
			
	?>