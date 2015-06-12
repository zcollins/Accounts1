<?php
ini_set('display_errors', 1);

error_reporting(E_ALL);

$account = \Accounts\Account::create('zcollins', '123');

$account->save();
