<?php
namespace oop_project\classes;

class Box
{
    private array $fruits = [];

    public function add(Fruit $fruit) : void
    {
        $this->fruits[] = $fruit;
    }

    public function empty() : void
    {
        $this->fruits = [];
    }

    public function __toString() : string
    {
        if (empty($this->fruits)) {
            return "The box is empty </br>";
        } else {
            $fruits = [];
            foreach ($this->fruits as $fruit) {
                $fruits[] = get_class($fruit);
            }
            return implode(", ", $fruits) . "</br>";
        }
    }
}
