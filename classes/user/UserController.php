<?php

include 'classes/includes.php';

class UserController extends UserModel
{
    public function updatePassword($id, $hash) {
        $this->setPassword($id, $hash);
    }

    public function getHash($id) {
        return $this->getPassword($id);
    }

    public function updateData($id, $name, $surname, $email, $phone, $address) {
        return $this->setData($id, $name, $surname, $email, $phone, $address);
    }
}