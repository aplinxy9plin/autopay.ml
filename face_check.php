<?php
session_start();
$servername = "localhost";
$username = "top4ek";
$password = "q2w3e4r5";
$dbname = "mega";
$first = $_GET['first'];
// echo $first;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$arr = [];
$phone = [];
$email = [];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($arr, req($first, $row["face"]));
      array_push($email, $row["email"]);
      array_push($phone, $row["phone"]);
      // echo $row["face"];
        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    $value = max($arr);
    $z = 0;
    foreach ($arr as $key) {
      if($value == $key){
        break;
      }
      $z++;
    }
    $val = json_decode($value);
    if(isset($val->confidence)){
      if($val->confidence < 0.6){
        echo "alert('К сожалению, вас нет в базе')";
      }else{
        echo 'good';
        $_SESSION['login'] = $email[$z];
        $_SESSION['phone'] = $phone[$z];
        // echo '<script>window.location.href = "lk";</script>';
        // header('Location: ./lk');
        // echo "Good";
        // echo "\n{$value}";
      }
    }else{
      echo "alert('К сожалению, вас нет в базе')";
    }
} else {
    echo "0 results";
}
$conn->close();

function req($first, $second){
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://southcentralus.api.cognitive.microsoft.com/face/v1.0/verify",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n    \"faceId1\": \"{$first}\",\n    \"faceId2\": \"{$second}\"\n}\n",
    CURLOPT_HTTPHEADER => array(
      "content-type: application/json",
      "ocp-apim-subscription-key: 4e4286d7b1cd4989868725a00664c633"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    // echo $response;
  }
  return $response;
}
