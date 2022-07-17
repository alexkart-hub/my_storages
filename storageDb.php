<?php

class storageDb implements Storage, StorageSave
{
    use traitGetUser;

    private function getData($type, $param = [])
    {
        switch ($type) {
            case 'user':
                //здесь реализуем получение данных из базы данных
//                return $param['id'] . ' from Db';
                return '';
        }
    }

    public function save()
    {
        //здесь реализуем сохранение в базе данных
        echo ' save to Db; ';
    }

    private function getStorage()
    {
        return new storageApi();
    }
}