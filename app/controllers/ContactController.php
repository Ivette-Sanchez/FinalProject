<?php

namespace app\controllers;
require_once __DIR__ . '/../models/Contact.php'; 

use app\models\Contact;

class ContactController
{
    public function validateContact($inputData) {
        $errors = [];
        $name = $inputData['name'];
        $message = $inputData['message'];
        $email = $inputData['email'];


        if ($name) {
            $name = htmlspecialchars($name, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($name) < 3) {
                $errors['nameShort'] = 'Name is too short!';
            }
        } else {
            $errors['requiredName'] = 'Name is required!';
        }


        if ($message) { //what if i dont requiire a message
            $message = htmlspecialchars($message, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($message) < 5) {
                $errors['messageShort'] = 'Message is too short';
            }
        } else {
            $errors['requiredMessage'] = 'Message is required';
        }

        if ($email) {
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
            if (!preg_match($regex, $email)) {
                $errors['invalidEmail'] = 'Email is invalid!';
            }
        } else {
            $errors['requiredEmail'] = 'Email is required!';
        }


        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }
        return [
            'name' => $name,
            'message' => $message,
            'email' => $email,
        ];
    }

    public function getAllContacts() {
        $contactModel = new Contact();
        header("Content-Type: application/json");
        $contacts = $contactModel->getAllContacts();

        echo json_encode($contacts);
        exit();
    }

    public function getContactByID($id) {
        $contactModel = new Contact();
        header("Content-Type: application/json");
        $contact = $contactModel->getContactById($id);
        echo json_encode($contact);
        exit();
    }

    public function saveContact() {
        $inputData = [
            'name' => $_POST['name'] ?: null,
            'message' => $_POST['message'] ?: null,
            'email' => $_POST['email'] ?: null,
        ];
        $contactData = $this->validateContact($inputData);

        $contact = new Contact();
        $contact->saveContact(
            [
                'name' => $contactData['name'],
                'message' => $contactData['message'],
                'email' => $contactData['email'],
            ]
        );

        http_response_code(200);
        echo json_encode([
            'success' => true
        ]);
        exit();
    }


}