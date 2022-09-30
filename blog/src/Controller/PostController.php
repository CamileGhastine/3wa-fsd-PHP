<?php

namespace App\Controller;

use App\Model\Entity\Post;
use App\Model\Repository\PostRepository;
use App\Service\FormHandler;

class PostController extends Controller
{
    public function index(): void
    {
        $repo = new PostRepository;
        $posts = $repo->findAll();

        $this->render('post/index', compact('posts'));
    }

    public function show(): void
    {
        $repo = new PostRepository;
        $post = $repo->findOne($_GET['id']);

        $this->render('post/show', compact('post'));
    }

    public function add(): void
    {
        if (!$_POST) {
            $this->render('post/add');
            return;
        }

        $formHandler = new FormHandler;
        $error = $formHandler->isValid($_POST);
        if (!$error) {
            $repo = new PostRepository;
            $repo->add($_POST['title'], $_POST['content']);
            header('Location: /post');
        }

        $this->render('post/add', compact('error'));
    }

    public function update(): void
    {
        $id = $_GET['id'];

        // Récupération de l'article à modifier.
        $repo = new PostRepository;
        $post = $repo->findOne($id);

        //traitement du formulaire et redirection
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $repo = new PostRepository;
            $repo->update($id, $_POST['title'], $_POST['content']);

            header('Location: /post/show?id=' . $id);
        }

        // Affichage du formulaire de modification
        $this->render('post/add', compact('post'));
    }

    public function delete(): void
    {
        $repo = new PostRepository;
        $repo->delete($_GET['id']);

        header('Location: /post');
    }
}
