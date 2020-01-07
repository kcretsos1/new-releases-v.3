SELECT
brp.best_title as title,
'https://flyers.udayton.edu/record=b'||b.record_num||'a' AS catalog_URL
FROM
sierra_view.bib_view as b
JOIN
sierra_view.bib_record_property as brp
ON b.id = brp.bib_record_id
WHERE
(
    b.cataloging_date_gmt <= NOW() AND 
    b.cataloging_date_gmt >= NOW() - '1 day'::INTERVAL
)
LIMIT 5