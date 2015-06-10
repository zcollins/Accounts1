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

        echo $account->username = $username;

        echo $account->setPassword($password);

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

    public function save() {
        /**
         * Find account in json file and save contents of $this->password to it
         */

        $file = fopen("creds.json", "r+", false);
        $accounts = json_decode(fread($file, filesize($file)), true);

        foreach($accounts as $account) {
            if ($account['username'] == $this->username) {
                fwrite($file, json_encode($this->username, $this->password));
            }
        }
        fclose($file);

    }

    private function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        return $this->password;
    }
}