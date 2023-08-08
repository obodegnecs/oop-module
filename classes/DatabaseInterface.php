<?php
namespace oop_project\classes;

interface DatabaseInterface
{
    public function write(string $str): void;
}
