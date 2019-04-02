<?php

$apikey = 'PUSHBULLET API KEY HERE';
$deviceid = 'DEVICE ID TO SEND NOTIFICATIONS HERE';
$itemname1 = 'StatTrak%E2%84%A2%20AWP%20%7C%20Atheris%20%28Factory%20New%29'; // stattrek awp atheris fn
$itemname2 = 'AWP%20%7C%20Atheris%20%28Factory%20New%29'; // awp atheris fn

function pushbullet($msg){
$data = json_encode(array( 'type' => 'note', 'title' => 'Steam Market Crawler by hTx', 'body' => $msg, 'device_iden' => $GLOBALS['deviceid'] ));
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api.pushbullet.com/v2/pushes');
curl_setopt($curl, CURLOPT_USERPWD, $GLOBALS['apikey']);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Content-Length: ' . strlen($data)]);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_exec($curl);
curl_close($curl);
}



//stattrek awp atheris fn
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://steamcommunity.com/market/priceoverview/?appid=730&currency=7&market_hash_name=' . $itemname1 );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$retorno1 = curl_exec( $ch );
$retornodecodado1 = json_decode($retorno1);
$msgPush1 = '======= Início =======' . PHP_EOL . 'Item 1: StatTrak™ AWP | Atheris (FN)' . PHP_EOL . 'Valor mínimo: ' . $retornodecodado1->{'lowest_price'} . PHP_EOL . 'Valor médio: ' . $retornodecodado1->{'median_price'} . PHP_EOL . 'Volume: ' . $retornodecodado1->{'volume'} . PHP_EOL . '======= FIM =======';
pushbullet($msgPush1);



//awp atheris fn
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'https://steamcommunity.com/market/priceoverview/?appid=730&currency=7&market_hash_name=' . $itemname2 );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$retorno2 = curl_exec( $ch );
$retornodecodado2 = json_decode($retorno2);
$msgPush2 = '======= Início =======' . PHP_EOL . 'Item 2: AWP | Atheris (FN)' . PHP_EOL . 'Valor mínimo: ' . $retornodecodado2->{'lowest_price'} . PHP_EOL . 'Valor médio: ' . $retornodecodado2->{'median_price'} . PHP_EOL . 'Volume: ' . $retornodecodado2->{'volume'} . PHP_EOL . '======= FIM =======';
pushbullet($msgPush2);