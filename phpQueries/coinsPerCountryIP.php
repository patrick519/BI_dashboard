<?php
    include '../lib/QueryToJSON.php';
    $query = "SELECT `ipCountry`, COUNT(`coins`) AS totalCoins, COUNT(`priceInEur`) AS totalReal FROM sales WHERE `ipCountry` 
              IS NOT NULL AND `ipCountry` <> \"??\" AND `ipCountry` <> \" \" 
              GROUP BY `ipCountry` LIMIT 0, 25";
    $toJson = new QueryToJSON();
    $JSONQuery = $toJson->to_json($query, JSON_PRETTY_PRINT);
    print $JSONQuery;
?>