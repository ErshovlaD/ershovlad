<?php
$access_token = 'ee9268351d0952cfd081fefd28362ada9c4eba1f18d891445fc325b783d901b4deeadd771b04ae1a5666b';

$status = "test";

$statusSet = curl('https://api.vk.com/method/status.set?text='.urlencode($status).'&v=3.0&access_token='.$access_token);

function curl( $url ){
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
$response = curl_exec( $ch );
curl_close( $ch );
return $response;
}
?>
