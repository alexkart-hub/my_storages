<?php
class storageApi implements Storage
{
    public function getUser($userId)
    {
        //здесь реализуем получение данных из Api
        return $userId . " from API";
    }
}