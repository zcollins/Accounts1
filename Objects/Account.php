<?php
/**
 *Property of Petrichor
 */

namespace Accounts\Objects;

class Account {

    public $username;

    public $password;

    public static function create($username, $password) {
        $account = new Account();
        $account->username = $username;

        $account->setPassword($password);

        $account->save();

        return $account;
    }

    public static function lookup($account) {
        /**
         * Scan json file for matching account and return account object
         */

        $file = fopen("creds.json", "r+", false);
        $accounts = json_decode(fread($file, filesize($file)), true);

        foreach($accounts as &$account) {
            if ($account['username'] == $account->username) {

                break;
            }
        }

      //  $account->username = $json['username'];
      //  $account->password = $json['password'];
    }

    public function save() {                                //Advantage would be that this would actually need to be called when the init happens due to the $this->   refs
        /**
         * Find account in json file and save contents of $this->password to it
         */

        $file = fopen("creds.json", "r+", false);
        $accounts = json_decode(fread($file, 4000), true);

        foreach($accounts as &$account) {
            if ($account['username'] == $this->username) {
                $account['username'] = $this->username;
                $account['password'] = $this->password;
                break;
            }
        }

        json_encode($accounts);
        fwrite($file, $accounts);
        fclose($file);
    }

    private function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        return $this->password;
    }
}

