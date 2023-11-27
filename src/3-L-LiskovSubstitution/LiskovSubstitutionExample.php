<?php

/**
 * Bird class represents a generic bird.
 */
class Bird
{
    public function fly()
    {
        // Fly
        // ... (Flying logic)
    }
}

/**
 * Duck class extends Bird and can fly and quack.
 */
class Duck extends Bird
{
    public function quack()
    {
        // Quack
        // ... (Quacking logic)
    }
}

/**
 * Ostrich class extends Bird.
 * However, it overrides fly method to throw an exception, violating Liskov Substitution Principle.
 * Ideally, subclasses should be substitutable for their base classes.
 */
class Ostrich extends Bird
{
    public function fly()
    {
        throw new Exception("Cannot fly");
    }
}
