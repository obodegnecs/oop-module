<?php
namespace oop_project\classes;

class Fruit
{
    private int $size = 0;
    private string $colour = "";
    private int $calorie = 0;

    public function getCalorie(): int
    {
        return $this->calorie;
    }

    public function getColour(): string
    {
        return $this->colour;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}
