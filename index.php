<html>
    <body>
        <form action="" method="POST">
            Username: <input type="text" name="username"><br>
            Password: <input type="text" name="password"<br>
            <br />
            <input type="submit" value="Order">
        </form>
    </body>
</html>

<?php

if(!empty($_POST)) {

    $account = \Accounts\Account::lookup($_POST['username']);

   $valid = \Accounts\Model::validate($account, $_POST['password']);

    if($valid) {
        //YAY
    } else {
        //NAY
    }
}