<?php
include '../lib/QueryToJSON.php';
$query = "SELECT count(x.lifespan) as transactions
FROM(
SELECT DATEDIFF(max(saleDateTime),min(saleDateTime)) as lifespan
FROM sales
WHERE accountName IN (SELECT accountName FROM sales WHERE YEAR(saleDateTime)=2014 AND MONTH(saleDateTime)=1)
GROUP BY accountName
) x
WHERE lifespan=0";
$toJson = new QueryToJSON();
$JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
print $JSONQuery;
?>
