<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT round(count(saleId)/count(distinct accountName),2) as avgtransaction
    FROM sales
    WHERE YEAR(saleDateTime)=2015 AND MONTH(saleDateTime)=4";
    $query_m = "SELECT round(count(saleId)/count(distinct accountName),2) as avgm
    FROM sales
    WHERE YEAR(saleDateTime)=2015 AND MONTH(saleDateTime)=3";
    
    $toJson = new QueryToJSON();
    $json = $toJson->to_json($query, JSON_PRETTY_PRINT);
    $json = substr($json, 1, strlen($json)-3);
	$json_m = $toJson->to_json($query_m, JSON_PRETTY_PRINT);
    $json = $json . ',' . substr($json_m, 2, strlen($json_m)-3);
        
    print $json;
?>