<?php

// A large interface that forces the implementing classes to define methods they don't use
interface Worker
{
    public function work();
    public function eat();
    public function sleep();
}

class HumanWorker implements Worker
{
    public function work()
    {
        // Working logic
    }

    public function eat()
    {
        // Eating logic
    }

    public function sleep()
    {
        // Sleep logic - might not be relevant for all types of workers
    }
}
