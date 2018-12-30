<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT YEAR(saleDateTime) as year, MONTH(saleDateTime) as month, round(round(sum(priceInEUR),2)/count(distinct accountName),2) as avgSpend
FROM sales
GROUP BY YEAR(saleDateTime), MONTH(saleDateTime)
ORDER BY year DESC, month DESC";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
