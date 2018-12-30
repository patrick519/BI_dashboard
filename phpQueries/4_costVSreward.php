<?php
	include '../lib/QueryToJSON.php';
	$query = "SELECT 
YEAR(saleDateTime) as year,
MONTH(saleDateTime) as month,
round(SUM(coins * 0.00025)) as coinsProductionCost,
round(sum(priceInEUR)) as harvestEndMonth
FROM sales
GROUP BY YEAR(saleDateTime), MONTH(saleDateTime)
ORDER BY `year`, `month`  ASC";
	$toJson = new QueryToJSON();
	$JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
	print $JSONQuery;
?>