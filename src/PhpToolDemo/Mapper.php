<?php
namespace PhpToolDemo;

class Mapper
{

    private $fileLocation;

    public function __construct($fileLocation)
    {
        $this->fileLocation = $fileLocation;
    }

    public function saveUuid($uuid)
    {
        file_put_contents($this->fileLocation, $uuid . PHP_EOL, FILE_APPEND);
    }

    public function getUuids()
    {
        $content = file_get_contents($this->fileLocation);
        $content = trim($content);

        $uuids = explode(PHP_EOL, $content);

        return $uuids;
    }



} 