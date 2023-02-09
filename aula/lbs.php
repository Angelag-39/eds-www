<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyBYT4GcgYshfh49yLTNu1hR_BcCkN8EM_s',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "homeMobileCountryCode": 55,
    "homeMobileNetworkCode": 724,
    "radioType": "gsm",
    "carrier": "Vodafone",
    "considerIp": true,
    "cellTowers": [
        {
            "cellId": 170402199,
            "locationAreaCode": 5511,
            "mobileCountryCode": 55,
            "mobileNetworkCode": 724,
            "age": 0,
            "signalStrength": -60,
            "timingAdvance": 15
        }
    ]
}',
));

$response=curl_exec($curl);

curl_close($curl);
echo $response;
