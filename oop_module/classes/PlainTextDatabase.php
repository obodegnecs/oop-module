<?php
namespace oop_project\classes;

class PlainTextDatabase implements DatabaseInterface
{
    public function write(string $str) : void
    {
        $handle = fopen("log.txt", "w");
        if (!$handle) {
            echo "Cannot open file (log.txt)";
            exit;
        } else {
            fwrite($handle, $str);
            fclose($handle);
        }
    }
}
