<?php

// Subclass changes the behavior of the base class method in a non-compatible way
class Bird
{
    public function fly()
    {
        // Fly logic
    }
}

class Penguin extends Bird
{
    public function fly()
    {
        throw new Exception("Cannot fly"); // Violates LSP, as Penguins cannot fly
    }
}
