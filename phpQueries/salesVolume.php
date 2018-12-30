<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT MONTH(saleDateTime) as month,
YEAR(saleDateTime) as year,
round(count(*),2) as rows,
round(sum(coins),2) as virtualmoney,
round(sum(priceInEUR),2) as realmoney
FROM sales
GROUP BY YEAR(saleDateTime), MONTH(saleDateTime)
ORDER BY `year`, `month`  ASC";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
