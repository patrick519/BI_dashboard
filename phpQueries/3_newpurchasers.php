<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT count(x.lifespan) as newpurchasers
FROM(
SELECT DATEDIFF(max(saleDateTime),min(saleDateTime)) as lifespan
FROM sales
WHERE accountName IN (SELECT accountName FROM sales WHERE YEAR(saleDateTime)=2015 AND MONTH(saleDateTime)=4)
GROUP BY accountName
) x
WHERE lifespan=0";
$query_m = "SELECT count(x.lifespan) as newm
FROM(
SELECT DATEDIFF(max(saleDateTime),min(saleDateTime)) as lifespan
FROM sales
WHERE accountName IN (SELECT accountName FROM sales WHERE YEAR(saleDateTime)=2015 AND MONTH(saleDateTime)=3)
GROUP BY accountName
) x
WHERE lifespan=0";

    $toJson = new QueryToJSON();
    $json = $toJson->to_json($query, JSON_PRETTY_PRINT);
    $json = substr($json, 1, strlen($json)-3);
	$json_m = $toJson->to_json($query_m, JSON_PRETTY_PRINT);
    $json = $json . ',' . substr($json_m, 2, strlen($json_m)-3);
        
    print $json;
?>
