<?php

/**
 * DatabaseConnectionInterface is an abstraction for database connections.
 * Following Dependency Inversion Principle, high-level modules should not depend on low-level modules.
 * Both should depend on abstractions.
 */
interface DatabaseConnectionInterface
{
    public function connect();
}

/**
 * MySQLConnection is a low-level module implementing DatabaseConnectionInterface.
 */
class MySQLConnection implements DatabaseConnectionInterface
{
    public function connect()
    {
        // MySQL connection logic
        // ... (Connection logic)
    }
}

/**
 * UserDAO is a high-level module depending on DatabaseConnectionInterface rather than a concrete class.
 * This makes it more flexible and adheres to Dependency Inversion Principle.
 */
class UserDAO
{
    private $dbConnection;

    public function __construct(DatabaseConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getUsers()
    {
        // Fetch users using $this->dbConnection
        // ... (User fetching logic)
    }
}
