<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT round(count(*),2) as rows, DAYOFWEEK(saleDateTime) as day
FROM sales
GROUP BY DAYOFWEEK(saleDateTime)
ORDER BY day ASC";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
