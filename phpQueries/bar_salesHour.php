<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT round(count(*),2) as rows, HOUR(saleDateTime) as hour
FROM sales
GROUP BY HOUR(saleDateTime)
ORDER BY hour ASC";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
