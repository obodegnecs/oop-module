<?php
namespace oop_project\classes;

class Logger
{
    private DatabaseInterface $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function debug()
    {
        $this->db->write("Debug text");
    }

    public function error()
    {
        $this->db->write("Error text");
    }
}
