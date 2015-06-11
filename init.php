<?php


$account = \Accounts\Account::create('zcollins', '123');

//echo var_dump($account);

$account->save();
