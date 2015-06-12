<?php
ini_set('display_errors', 1);

error_reporting(E_ALL);

include('Objects/Account.php');

$account = \Accounts\Objects\Account::create('zcollins', '123');

$account->save();
