<?php

/**
 * Shape interface enforces a contract for area calculation.
 * Following Open/Closed Principle, you can add new shapes without modifying existing code.
 */
interface Shape
{
    public function area();
}

/**
 * Rectangle class implements Shape interface.
 * It calculates the area specific to a rectangle.
 */
class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

/**
 * Circle class implements Shape interface.
 * It calculates the area specific to a circle.
 */
class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}
