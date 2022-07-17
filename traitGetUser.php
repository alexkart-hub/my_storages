<?php
trait traitGetUser
{
    private $data;

    public function getUser($userId)
    {
        $this->data = $this->getData('user', ['id' => $userId]);
        if (empty($this->data)) {
            $storage = $this->getStorage();
            $this->data = $storage->getUser($userId);
            echo $this->data;
            $this->save();
        }
        return $this->data;
    }
}