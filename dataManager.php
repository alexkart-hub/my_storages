<?php

class dataManager
{
    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function getUser($userId)
    {
        return $this->storage->getUser($userId);
    }
}