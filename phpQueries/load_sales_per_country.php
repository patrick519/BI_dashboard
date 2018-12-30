<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT COUNT(saleId) as num_of_sales, ipCountry, countries.name as name,  QUARTER(saleDateTime) as Qdate, YEAR(saleDateTime) as Ydate FROM sales, countries WHERE sales.ipCountry=countries.id GROUP BY Ydate, Qdate, ipCountry, name";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
