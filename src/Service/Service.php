<?php

namespace Service;

abstract class Service
{
    private $entityName;
    private $urlPath;

    public function __construct()
    {
        $this->entityName = substr(get_class($this), 8, -7);
        $this->urlPath = strtolower($this->entityName);
    }

    public function getEntityName()
    {
        return $this->entityName;
    }
}