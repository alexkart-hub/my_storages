<?php

class storageCache implements Storage, StorageSave
{
    use traitGetUser;

    private function getData($type, $param = [])
    {
        switch ($type) {
            case 'user':
                //здесь реализуем получение данных из кэша
//                return $param['id'] . ' from Cache';
                return '';
        }
    }

    public function save()
    {
        //здесь реализуем сохранение в кэш
        echo ' save to Cache; ';
    }

    private function getStorage()
    {
        return new storageDb();
    }
}