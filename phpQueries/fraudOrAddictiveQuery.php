<?php
	include '../lib/QueryToJSON.php';
	$query = "SELECT 
YEAR(saleDateTime) as year,
MONTH(saleDateTime) as month,
DAY(saleDateTime) as day,
ip, 
COUNT(saleId) as transaction
FROM sales
GROUP BY year, month, day ,ip
HAVING transaction>30";
	$toJson = new QueryToJSON();
	$JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
	print $JSONQuery;
?>