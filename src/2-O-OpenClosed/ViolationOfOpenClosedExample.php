<?php
// Modifying existing code for new functionality - violates OCP
class AreaCalculator
{
    public function calculate($shapes)
    {
        $area = 0;
        foreach ($shapes as $shape) {
            if ($shape instanceof Rectangle) {
                $area += $shape->width * $shape->height;
            } else if ($shape instanceof Circle) {
                // Added new logic for Circle - modification of existing class
                $area += pi() * $shape->radius * $shape->radius;
            }
        }
        return $area;
    }
}
