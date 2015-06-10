<?php

$account = \Accounts\Account::create('zcollins', '123');

$account->save();

echo var_dump($account);

