<?php
include '../lib/QueryToJSON.php';
$query = "SELECT YEAR(saleDateTime) as year, MONTH(saleDateTime) as month, count(accountName) as transactions
FROM sales
GROUP BY YEAR(saleDateTime), MONTH(saleDateTime)
HAVING count(accountName) > 1
ORDER BY year DESC, month DESC";
$toJson = new QueryToJSON();
$JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
print $JSONQuery;
?>
