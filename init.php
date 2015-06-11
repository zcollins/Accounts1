<?php


$account = \Accounts\Account::create('zcollins', '123');

var_dump($account);

$account->save();
