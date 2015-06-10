<?php

$account = \Accounts\Account::create('zcollins', '123');

/**
 * use the save func to write to json
 */
$account->save();

var_dump($account);

