<?php
header('Content-Type: application/json');
require 'db.php';
$city = $_GET['city'] ?? '';
$key = '520c9864835c457c6bc978cbdf53068a';
$url = "https://api.open-meteo.com/v1/forecast?latitude=&longitude=&current_weather=true;";
$data = json_decode(file_get_contents($url), true);
if(!$data || $data['cod'] !== '200') { http_response_code(400); echo json_encode(['error'=>'City not found']); exit; }
$now = $data['list'][0];
$stmt = $conn->prepare("INSERT INTO history(city,temp,description,humidity,wind) VALUES(?,?,?,?,?)");
$stmt->bind_param('sdsid', $city, $now['main']['temp'], $now['weather'][0]['description'], $now['main']['humidity'], $now['wind']['speed']);
$stmt->execute();
for($i=0;$i<count($data['list']); $i+=8) {
  $f = $data['list'][$i];
  $forecast[]=[
    'dt'=>$f['dt_txt'],
    'temp'=>$f['main']['temp'],
    'desc'=>$f['weather'][0]['description']
  ];
}
echo json_encode([
  'city'=> $data['city']['name'],
  'current'=>[
    'temp'=>$now['main']['temp'],
    'desc'=>$now['weather'][0]['description'],
    'humidity'=>$now['main']['humidity'],
    'wind'=>$now['wind']['speed']
  ],
  'forecast'=>$forecast
]);
?>
