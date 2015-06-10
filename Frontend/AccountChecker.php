<?php
/**
 * Property of Petrichor
 */

namespace Accounts\Backend;

use Accounts\Backend;

class AccountChecker extends Account {                                         //This needs to accept credentials as a parameter

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



//First create the initial credentials in the thing
//then save the hashed version of the password into the json file
//display a form to enter user and pass

//lookup an existing user against the username entered
//take the information from the entered user and password create an accounts object and compare the account object to what is stored.  Going to have to de-hash to compare to raw pass
//then return true or false

