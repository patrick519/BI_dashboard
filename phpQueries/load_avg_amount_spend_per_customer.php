<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT QUARTER(saleDateTime) as Qdate, YEAR(saleDateTime) as Ydate , SUM(priceInEUR) as price, SUM(coins) as coins, COUNT(accountName) as numberOfClients  FROM sales GROUP BY Ydate, Qdate";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
