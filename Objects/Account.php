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

        echo "test-1";

        $account->username = $username;

        $account->setPassword($password);

        echo "test-2";


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

    public function save() {                                //Advantage would be that this would actually need to be called when the init happens due to the $this->   refs
        /**
         * Find account in json file and save contents of $this->password to it
         */
        echo "test1";

        $file = fopen("creds.json", "r+", false);
        $accounts = json_decode(fread($file, filesize($file)), true);

        echo "test2";


        foreach($accounts as &$account) {
            if ($account['username'] == $this->username) {
                $account['username'] = $this->username;
                $account['password'] = $this->password;
                break;
            }
        }

        echo "test3";

        json_encode($accounts);
        fwrite($file, $accounts);
        fclose($file);
    }

    private function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        return $this->password;
    }
}

