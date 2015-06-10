<!DOCTYPE HTML>
<html>
<body>

<?php
    include('AccountChecker.php');
    include('Account.php');
?>


<?php if(empty($_POST) && (!isset( $_COOKIE['username']  ))) { ?>                //If there is no data, and no cookie exists, display form
    <form action="" method="POST">
        <h3>Enter your credentials</h3>
        Username: <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
        <input type="submit">
    </form>


<?php } else {

    $account = new \Accounts\Backend\Account();
    $checker = new \Accounts\Backend\Account();

    $account->setUsername($_POST['username']);
    $account->setPassword($_POST['password']);



    echo $checker->checkCredentials($_POST['username'],$_POST['password']);


} ?>
