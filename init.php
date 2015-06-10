<?php

echo 'test';

$account = \Accounts\Account::create('zcollins', '123');

$account->save();

echo 'does not echo';