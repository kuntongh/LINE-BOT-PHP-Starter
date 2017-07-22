<?php
$ch = curl_init();
$curlConfig = array(
    CURLOPT_URL            => "https://poloniex.com/public?command=returnOrderBook&currencyPair=BTC_NXT&depth=10",
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
);
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
echo json_encode($result, JSON_PRETTY_PRINT);
curl_close($ch);