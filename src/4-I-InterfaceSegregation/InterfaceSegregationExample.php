<?php

/**
 * WorkerInterface is for working functionality.
 * Following Interface Segregation Principle, interfaces should be specific rather than generic.
 */
interface WorkerInterface
{
    public function work();
}

/**
 * EaterInterface is for eating functionality.
 * Separate interface ensures that classes implementing it don't need to implement unrelated methods.
 */
interface EaterInterface
{
    public function eat();
}

/**
 * HumanWorker class implements both WorkerInterface and EaterInterface,
 * showcasing how a class can choose to implement multiple specific interfaces.
 */
class HumanWorker implements WorkerInterface, EaterInterface
{
    public function work()
    {
        // Working
        // ... (Working logic)
    }

    public function eat()
    {
        // Eating
        // ... (Eating logic)
    }
}
