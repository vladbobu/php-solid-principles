<?php

// A class that handles user data management and also log operations - violates SRP
class User
{
    public function createUser($userData)
    {
        // User creation logic
        // ...
        $this->log("User created");
    }

    public function deleteUser($userId)
    {
        // User deletion logic
        // ...
        $this->log("User deleted");
    }

    private function log($message)
    {
        // Logging logic - should not be part of the User class
        // ...
    }
}
