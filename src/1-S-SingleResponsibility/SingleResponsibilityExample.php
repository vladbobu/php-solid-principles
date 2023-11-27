<?php

/**
 * Class User handles user-related operations, adhering to Single Responsibility Principle.
 * It's only responsible for user operations and not for other tasks like logging.
 */
class User
{
    public function createUser($userData)
    {
        // Create a new user
        // ... (User creation logic)
    }

    public function deleteUser($userId)
    {
        // Delete a user
        // ... (User deletion logic)
    }
}

/**
 * Class UserLogger is responsible for logging messages.
 * This separation ensures that User class is not handling multiple responsibilities.
 */
class UserLogger
{
    public function log($message)
    {
        // Log a message to a log file
        // ... (Logging logic)
    }
}
