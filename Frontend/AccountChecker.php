<?php
/**
 * Property of Petrichor
 */

namespace Accounts\Backend;

use Accounts\Backend;

class AccountChecker extends Account{                                         //This needs to accept credentials as a parameter


    public function checkCredentials($username, $password) {


        if($this->getUsername()==$username && $this->getPassword()==$password) {
            if (!isset($_COOKIE["username"])) {
                setcookie("username", "$username", time() + (86400 * 7));
                setcookie("password","$password",time() + (86400 * 7));
            }
            return "Yes";
        } else {
            return "No";
        }
    }
}