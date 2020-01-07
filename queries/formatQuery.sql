SELECT DISTINCT
brp.best_title as title,
brp.best_author as author,
'http://flyers.udayton.edu/record=b'||b.record_num||'a' AS catalog_URL,
CASE
WHEN brp.material_code = 'a' THEN 'BOOK'
WHEN brp.material_code = 'c' THEN 'MUSIC SCORE'
WHEN brp.material_code = 'd' THEN 'MUSIC SCORE'
WHEN brp.material_code = 'e' THEN 'MAP'
WHEN brp.material_code = 'f' THEN 'MAP'
WHEN brp.material_code = 'g' THEN 'VIDEO'
WHEN brp.material_code = 'i' THEN 'AUDIO'
WHEN brp.material_code = 'j' THEN 'MUSIC'
WHEN brp.material_code = 'k' THEN 'GRAPHIC'
WHEN brp.material_code = 'l' THEN 'DATABASE'
WHEN brp.material_code = 'm' THEN 'DIGITAL FILE'
WHEN brp.material_code = 'o' THEN 'KIT'
WHEN brp.material_code = 'p' THEN 'MIXED MATERIAL'
WHEN brp.material_code = 'r' THEN 'OBJECT'
WHEN brp.material_code = 's' THEN 'JOURNAL'
WHEN brp.material_code = 't' THEN 'MANUSCRIPT'
WHEN brp.material_code = 'h' THEN 'MICROFORM'
WHEN brp.material_code = 'z' THEN 'THESIS'
WHEN brp.material_code = 'b' THEN 'E-THESIS'
WHEN brp.material_code = 'n' THEN 'INSTRUCTIONAL MATERIAL'
WHEN brp.material_code = 'u' THEN 'E-BOOK'
WHEN brp.material_code = 'v' THEN 'E-JOURNAL'
WHEN brp.material_code = 'q' THEN 'E-RESOURCE'
WHEN brp.material_code = 'w' THEN 'E-VIDEO'
WHEN brp.material_code = 'x' THEN 'E-AUDIO'
WHEN brp.material_code = 'y' THEN 'E-MUSIC'
WHEN brp.material_code = '-' THEN '[....]'
ELSE '[....]'
END AS mat_type,
b.cataloging_date_gmt,
CASE   
WHEN UPPER( a.call_number_prefix ) = 'K' THEN 'Law'  
WHEN UPPER( a.call_number_prefix ) LIKE 'KB%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KD%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KE%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KF%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KG%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KH%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KJ%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KK%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KL%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KM%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KN%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KO%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KP%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KQ%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KR%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KS%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KT%' THEN 'Law'        
WHEN UPPER( a.call_number_prefix ) LIKE 'KU%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KV%' THEN 'Law'    
WHEN UPPER( a.call_number_prefix ) LIKE 'KW%' THEN 'Law' 
WHEN UPPER( a.call_number_prefix ) LIKE 'KZ%' THEN 'Law'  
WHEN UPPER( a.call_number_prefix ) LIKE 'DJ%' THEN 'History'
WHEN UPPER( a.call_number_prefix ) LIKE 'A%' THEN 'Humanities and Library Science'
WHEN UPPER( a.call_number_prefix ) = 'B' THEN 'Philosophy'        
WHEN UPPER( a.call_number_prefix ) LIKE 'BC%' THEN 'Philosophy'
WHEN UPPER( a.call_number_prefix ) LIKE 'BD%' THEN 'Philosophy'
WHEN UPPER( a.call_number_prefix ) LIKE 'BF%' THEN 'Psychology'
WHEN UPPER( a.call_number_prefix ) LIKE 'BH%' THEN 'Philosophy'
WHEN UPPER( a.call_number_prefix ) LIKE 'BJ%' THEN 'Philosophy'
WHEN UPPER( a.call_number_prefix ) LIKE 'BL%' THEN 'Religion'
WHEN UPPER( a.call_number_prefix ) LIKE 'BM%' THEN 'Religion'
WHEN UPPER( a.call_number_prefix ) LIKE 'BP%' THEN 'Religion'
WHEN UPPER( a.call_number_prefix ) LIKE 'BQ%' THEN 'Religion'
WHEN UPPER( a.call_number_prefix ) LIKE 'BR%' THEN 'Religion'
WHEN UPPER( a.call_number_prefix ) LIKE 'BS%' THEN 'Religion'
WHEN UPPER( a.call_number_prefix ) LIKE 'BT%' THEN 'Religion'
WHEN UPPER( a.call_number_prefix ) LIKE 'BV%' THEN 'Religion'
WHEN UPPER( a.call_number_prefix ) LIKE 'BX%' THEN 'Religion'
WHEN UPPER( a.call_number_prefix ) = 'C' THEN 'Antropology and Archaeology'  
WHEN UPPER( a.call_number_prefix ) LIKE 'CB%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'CC%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'CD%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'CE%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'CJ%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'CN%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'CR%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'CS%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'CT%' THEN 'Biography'         
WHEN UPPER( a.call_number_prefix ) LIKE 'D%' THEN 'History'    
WHEN UPPER( a.call_number_prefix ) LIKE 'E%' THEN 'History'        
WHEN UPPER( a.call_number_prefix ) LIKE 'F%' THEN 'History'     
WHEN UPPER( a.call_number_prefix ) LIKE 'GA%' THEN 'Earth and Environmental Sciences'
WHEN UPPER( a.call_number_prefix ) LIKE 'GB%' THEN 'Earth and Environmental Sciences'
WHEN UPPER( a.call_number_prefix ) LIKE 'GC%' THEN 'Earth and Environmental Sciences'
WHEN UPPER( a.call_number_prefix ) LIKE 'GE%' THEN 'Earth and Environmental Sciences'
WHEN UPPER( a.call_number_prefix ) LIKE 'GF%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'GN%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'GR%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'GT%' THEN 'Anthropology and Archaeology'
WHEN UPPER( a.call_number_prefix ) LIKE 'GV%' THEN 'Recreation and Leisure'        
WHEN UPPER( a.call_number_prefix ) = 'G' THEN 'Earth and Environmental Sciences'   
WHEN UPPER( a.call_number_prefix ) LIKE 'HA%' THEN 'Computer Sciences and Mathematics'
WHEN UPPER( a.call_number_prefix ) LIKE 'HB%' THEN 'Economics'
WHEN UPPER( a.call_number_prefix ) LIKE 'HC%' THEN 'Economics'
WHEN UPPER( a.call_number_prefix ) LIKE 'HF%' THEN 'Business and Management'
WHEN UPPER( a.call_number_prefix ) LIKE 'HG%' THEN 'Economics'
WHEN UPPER( a.call_number_prefix ) LIKE 'HJ%' THEN 'Economics'
WHEN UPPER( a.call_number_prefix ) LIKE 'HX%' THEN 'Economics'
WHEN UPPER( a.call_number_prefix ) LIKE 'H%' THEN 'Social Sciences'   
WHEN UPPER( a.call_number_prefix ) LIKE 'J%' THEN 'Political Science'   
WHEN UPPER( a.call_number_prefix ) LIKE 'L%' THEN 'Education '      
WHEN UPPER( a.call_number_prefix ) LIKE 'M%' THEN 'Music'    
WHEN UPPER( a.call_number_prefix ) LIKE 'N%' THEN 'Art'    
WHEN UPPER( a.call_number_prefix ) LIKE 'P%' THEN 'Language and Literature'        
WHEN UPPER( a.call_number_prefix ) = 'Q' THEN 'Science and Technology'   
WHEN UPPER( a.call_number_prefix ) LIKE 'QA%' THEN 'Computer Science and Mathematics'  
WHEN UPPER( a.call_number_prefix ) LIKE 'QB%' THEN 'Astronomy'    
WHEN UPPER( a.call_number_prefix ) LIKE 'QC%' THEN 'Physics'    
WHEN UPPER( a.call_number_prefix ) LIKE 'QD%' THEN 'Chemistry'    
WHEN UPPER( a.call_number_prefix ) LIKE 'QE%' THEN 'Earth and Environmental Sciences'    
WHEN UPPER( a.call_number_prefix ) LIKE 'QH%' THEN 'Biology'    
WHEN UPPER( a.call_number_prefix ) LIKE 'QK%' THEN 'Biology'    
WHEN UPPER( a.call_number_prefix ) LIKE 'QL%' THEN 'Biology'    
WHEN UPPER( a.call_number_prefix ) LIKE 'QM%' THEN 'Biology'    
WHEN UPPER( a.call_number_prefix ) LIKE 'QP%' THEN 'Biology'    
WHEN UPPER( a.call_number_prefix ) LIKE 'QR%' THEN 'Biology'   
WHEN UPPER( a.call_number_prefix ) LIKE 'R%' THEN 'Medicine'
WHEN UPPER( a.call_number_prefix ) = 'S' THEN 'Agriculture'      
WHEN UPPER( a.call_number_prefix ) LIKE 'SB%' THEN 'Agriculture' 
WHEN UPPER( a.call_number_prefix ) LIKE 'SB%' THEN 'Agriculture' 
WHEN UPPER( a.call_number_prefix ) LIKE 'SD%' THEN 'Agriculture' 
WHEN UPPER( a.call_number_prefix ) LIKE 'SF%' THEN 'Agriculture' 
WHEN UPPER( a.call_number_prefix ) LIKE 'SH%' THEN 'Agriculture' 
WHEN UPPER( a.call_number_prefix ) LIKE 'SK%' THEN 'Recreation and Leisure' 
WHEN UPPER( a.call_number_prefix ) LIKE 'TA%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TC%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TD%' THEN 'Earth and Environmental Sciences'
WHEN UPPER( a.call_number_prefix ) LIKE 'TE%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TF%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TG%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TH%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TJ%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TK%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TL%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TN%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TP%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TR%' THEN 'Photography'
WHEN UPPER( a.call_number_prefix ) LIKE 'TS%' THEN 'Engineering and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'TT%' THEN 'Art'
WHEN UPPER( a.call_number_prefix ) LIKE 'TX%' THEN 'Food and Home Economics'
WHEN UPPER( a.call_number_prefix ) = 'T' THEN 'Science and Technology'
WHEN UPPER( a.call_number_prefix ) LIKE 'U%' THEN 'Military Science'
WHEN UPPER( a.call_number_prefix ) LIKE 'V%' THEN 'Military Science'        
WHEN UPPER( a.call_number_prefix ) LIKE 'Z%' THEN 'Humanities and Library Science'  
ELSE NULL        
END AS lcc,
(
	SELECT
	split_part(regexp_replace(v.field_content, '[a-wyzA-WYZ.:();-]', '| ', 'ig'), '|', 3)
	FROM
	sierra_view.varfield v
	WHERE    
	(
		v.record_id = m.id 
		AND v.varfield_type_code = 'i' 
		AND v.marc_tag = '020' 
		AND v.field_content LIKE '|a%' 
		AND v.field_content IS NOT NULL
	)   
	ORDER BY length(v.field_content) DESC
	LIMIT 1
)
AS isbn,
--right(''||b.cataloging_date_gmt::DATE, 5)||left('-'||b.cataloging_date_gmt::DATE, 5) as cat_date,
''||to_char(b.cataloging_date_gmt, 'Month dd, yyyy') as cat_date,
string_agg(regexp_replace(regexp_replace(trim(split_part(regexp_replace(regexp_replace(regexp_replace(v.field_content, '\|0(.+?)\|[a-z]', ' -- '), '\|0.+\|[a-z]', ' -- '), '\|0.+\|[a-z]', ' -- ') , '|0', '1')), '(\|[e-orsuvwxyz]{1})', ' -- ', 'ig'),  '(\|[a-dpqt]{1})', ' ', 'ig'), '|' ORDER BY v.marc_tag ASC)  as subject

FROM
sierra_view.record_metadata as m

LEFT OUTER JOIN
sierra_view.bib_record_property as brp
ON
m.id = brp.bib_record_id

LEFT OUTER JOIN
sierra_view.bib_record_call_number_prefix AS a
ON brp.bib_record_id = a.bib_record_id

LEFT OUTER JOIN
sierra_view.bib_view as b
ON
brp.bib_record_id = b.id

LEFT OUTER JOIN
sierra_view.bib_record_location as brl
ON
m.id = brl.bib_record_id

LEFT OUTER JOIN
sierra_view.varfield v
ON v.record_id = m.id

WHERE
m.record_type_code = 'b' AND
brp.best_title IS NOT NULL AND
b.title IS NOT NULL AND
(
	brl.location_code NOT LIKE 'c%' AND
	brl.location_code NOT LIKE 'l%' AND
	brl.location_code NOT LIKE 'rl%' AND
	brl.location_code NOT LIKE 'rg%' AND
	brl.location_code NOT LIKE 'w%' AND
	brl.location_code NOT LIKE 'v%' AND
	brl.location_code NOT LIKE 'h%' AND
	brl.location_code NOT LIKE 'multi%'
) AND
v.varfield_type_code = 'd' AND
((v.marc_ind2 = '0') OR (v.marc_ind2 = '4')) AND
(b.bcode3 != 's') AND (b.bcode3 != 'n') AND
((v.marc_tag ~'6[0-3][0-9]') OR (v.marc_tag ~'65[0-1]'))

