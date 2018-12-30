<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT round(count(*),2) as rows, countries.name AS origin
FROM sales LEFT JOIN countries ON sales.ipCountry = countries.id
WHERE countries.name IS NOT NULL AND countries.name <> \"??\" 
GROUP BY ipCountry
ORDER BY rows DESC";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>
