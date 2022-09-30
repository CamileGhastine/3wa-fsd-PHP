<?php

namespace App\Service;

class FormHandler
{
    public function isValid(array $post)
    {
        $error= [];

        if (strlen($post['title']) > 10) {
            $error['title'] = 'votre titre doit faire 256 caractères max';
        }

        if (!isset($_POST['title']) || empty($_POST['title'])) {
            $error['title'] = 'Vous devez entrer un titre';
        }

        if (!isset($_POST['content']) || empty($_POST['content'])) {
            $error['content'] = 'Vous devez entrer un contenu';
        }

        return $error;
    }
}