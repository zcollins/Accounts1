<?php

namespace Accounts;


class Model {

    public static function validate(Account $account, $password) {
        return password_verify($password, $account->password);
    }
}