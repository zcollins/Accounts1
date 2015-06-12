<?php

echo "HELLO";

$account = \Accounts\Account::create('zcollins', '123');


$account->save();
