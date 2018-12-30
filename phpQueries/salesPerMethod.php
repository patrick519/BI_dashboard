<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT 
YEAR(saleDateTime) as year,
MONTH(saleDateTime) as month,
round(count(*),2) as rows,
methodName,
round(sum(coins),2) as virtualmoney,
round(sum(priceInEUR),2) as realmoney
FROM sales, methods
WHERE methods.methodId = sales.methodId
GROUP BY YEAR(saleDateTime), MONTH(saleDateTime), methodName order by year, month, methodName ASC";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
