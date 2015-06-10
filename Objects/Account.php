<?php
/**
 *Property of Petrichor
 */

namespace Accounts;

class Account {

    public $username;

    public $password;

    public static function create($username, $password) {
        $account = new Account();

        $account->username = $username;

        $account->setPassword($password);

        return $account;
    }

    public static function lookup($account) {
        /**
         * Scan json file for matching account and return account object
         */

        $file = fopen("creds.json", "r+", false);
        $accounts = json_decode(fread($file, filesize($file)), true);

        foreach($accounts->username as $user)
        {
            if($account->username == $user->username)
            {
                return $user;
            }
        }

      //  $account->username = $json['username'];
      //  $account->password = $json['password'];
    }

    public function save(Account $save) {
        /**
         * Find account in json file and save contents of $this->password to it
         */

        $file = fopen("creds.json", "r+", false);
        $accounts = json_decode(fread($file, filesize($file)), true);

        foreach($accounts->username as $account)
        {
            if($account->username == $account->username)
            {
               fwrite($file, json_encode($account->password, $account->setPassword($save->password)));
            }
        }
        var_dump((json_decode($file, filesize($file), true)));
        fclose($file);
    }

    private function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        return $this->password;
    }
}