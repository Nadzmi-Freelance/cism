<?php
class Account
{
    // variables
    private $username, $password, $email;

    // constructor
    public function __construct($username="", $password="", $email="")
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    // getter
    public function getUsername() { return $this->username; }
    public function getPassword() { return $this->password; }
    public function getEmail() { return $this->email; }

    // setter
    public function setUsername($username) { $this->username = $username; }
    public function setPassword($password) { $this->password = $password; }
    public function setEmail($email) { $this->email = $email; }
}
?>