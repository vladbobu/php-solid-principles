<?php

// High-level module directly depending on a low-level module
class UserDAO
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new MySQLConnection(); // Direct dependency on a specific DB implementation
    }

    public function getUsers()
    {
        // Fetch users using $this->dbConnection
    }
}
