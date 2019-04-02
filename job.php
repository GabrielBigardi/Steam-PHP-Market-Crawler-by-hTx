<?php

$apikey = 'PUSHBULLET API KEY';
$deviceid = 'PUSHBULLET DEVICE ID';

function pushbullet($msg){
$data = json_encode(array( 'type' => 'note', 'title' => 'Steam Market Crawler by hTx', 'body' => $msg, 'device_iden' => $deviceid ));
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api.pushbullet.com/v2/pushes');
curl_setopt($curl, CURLOPT_USERPWD, $apikey);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Content-Length: ' . strlen($data)]);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_exec($curl);
curl_close($curl);
}


$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://steamcommunity.com/market/priceoverview/?appid=730&currency=7&market_hash_name=StatTrak%E2%84%A2%20AWP%20%7C%20Atheris%20%28Factory%20New%29' );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$retorno = curl_exec( $ch );

$retornodecodado = json_decode($retorno);

$msgPush = '======= Início =======' . PHP_EOL . 'Item: StatTrak™ AWP | Atheris (FN)' . PHP_EOL . 'Valor mínimo: ' . $retornodecodado->{'lowest_price'} . PHP_EOL . 'Valor médio: ' . $retornodecodado->{'median_price'} . PHP_EOL . 'Volume: ' . $retornodecodado->{'volume'} . PHP_EOL . '======= FIM =======';

pushbullet($msgPush);