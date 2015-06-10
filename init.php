<?php

$account = \Accounts\Account::create('zcollins', '123');

$account->save();

echo ($account->password);

echo 'test';