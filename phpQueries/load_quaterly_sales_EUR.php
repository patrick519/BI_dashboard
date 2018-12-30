<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT SUM(priceInCurrency) as price, QUARTER(saleDateTime) as Qdate, YEAR(saleDateTime) as Ydate FROM sales GROUP BY Ydate, Qdate";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>

