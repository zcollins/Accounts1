<?php


$account = \Accounts\Account::create('zcollins', '123');

$account->save();

//$json_string =    file_get_contents("creds.json");              //reads the file
//$parsed_json = json_decode($json_string, true);                 //decoedes
//$parsed_json = $parsed_json['forecast']['txt_forecast']['forecastday'];
////pr($parsed_json);
//
//foreach($parsed_json as $key => $value)
//{
//    echo $value['period'] . '<br>';
//    echo $value['icon'] . '<br>';
//    // etc
//}