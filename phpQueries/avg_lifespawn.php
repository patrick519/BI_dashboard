<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT round(AVG(x.lifespan),0) as daysLifespan
FROM(
SELECT DATEDIFF(max(saleDateTime),min(saleDateTime)) as lifespan
FROM sales
WHERE accountName IN (SELECT accountName FROM sales WHERE YEAR(saleDateTime)=2014 AND MONTH(saleDateTime)=1)
GROUP BY accountName
) x";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
