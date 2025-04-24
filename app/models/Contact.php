<?php

namespace app\models;

use app\models\Model;

class Contact extends Model {

    public function getAllContactsByNameOrEmail($name, $email) {
        $query = "select * from contacts WHERE name like :name or email like :email";
        return $this->query($query, [
            'name' => '%' . $name . '%',
            'email' => '%' . $email . '%',
        ]);
    }

    public function getAllContacts() {
        $query = "select * from contacts";
        return $this->query($query);
    }

    public function getContactById($id){
        $query = "select * from contacts where id = :id";
        return $this->query($query, ['id' => $id]);
    }

    public function saveContact($inputData){
        $query = "insert into contacts (name, message, email) values (:name, :message, :email);";
        return $this->query($query, $inputData);
    }

}