<?php
// var_dump(file_get_contents('php://input'));
// $b = $_GET['x'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.imgur.com/3/image?access_token=59aa2669edd3ed0a66eefa9cd8a794f690620a7e&client_id=018ebfa932f27b1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => file_get_contents('php://input'),
  CURLOPT_HTTPHEADER => array(
    "content-type: application/octet-stream"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $a = json_decode($response);
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://southcentralus.api.cognitive.microsoft.com/face/v1.0/detect?returnFaceId=true&returnFaceAttributes=emotion,age&returnFaceLandmarks=false",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"url\": \"".$a->data->link."\"}",
    CURLOPT_HTTPHEADER => array(
      "content-type: application/json",
      "ocp-apim-subscription-key: 4e4286d7b1cd4989868725a00664c633"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);
  $t = json_decode($response);
  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
    } else {
      var_dump($t[0]);
      if(isset($t[0]->faceId)){
        if(isset($_GET['q'])){
          echo($t[0]->faceId . '_' . $t[0]->faceAttributes->age);
        }else{
          echo($t[0]->faceId);
        }
      }else{
        echo "bad";
      }
  }
}
