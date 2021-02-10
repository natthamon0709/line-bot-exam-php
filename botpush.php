<?php



require "vendor/autoload.php";

$access_token = '5Us0NZtedomqwY7hl6xVD2qogjZ9N+FcXUS3RsERdcB4HpNjDjzNR3sybms+dPDEvQMH4m9ulh1ynUk41B78prE7qZ2CYMSGIPc3fNYmUsTEre6ckkm1BnDRi27oiMZSc+wz0/EHMacecfCm6II+EQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bb132a2ab514014a8d4c167ef3c45abd';

$pushID = 'U1d02fe6bed712933fcff4646fbadcceb';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







