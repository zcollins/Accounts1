<?php
/**
 *Property of Petrichor
 */

namespace Accounts\Backend;

class Account {

    private $username;

    private $password;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->$password = $password;
    }

    public function getPassword() {
        return $this->password;
    }
}