<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT COUNT(saleId) as number_of_sales, HOUR(saleDateTime) as Hdate, QUARTER(saleDateTime) as Qdate, YEAR(saleDateTime) as Ydate FROM sales GROUP BY Ydate, Qdate, Hdate";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
