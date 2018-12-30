<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT count(*) as rows, substr(methods.methodName, 1,(LENGTH(methods.methodName)-1)) AS paymentmethod 
FROM sales LEFT JOIN methods ON sales.methodId = methods.methodId
GROUP BY LEFT(methods.methodName, 4)";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
