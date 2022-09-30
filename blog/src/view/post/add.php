<?php
// $id = isset($post) ? $post->getId() : null;
$title = isset($post) ? $post->getTitle() : null;
$content = isset($post) ? $post->getContent() : null;
$h2Page = isset($post)
    ? 'Modifier l\'article'
    : 'Ecrire un nouvel article';
$action = isset($post)
    ? '/post/update?id=' . $id
    : '/post/add';
$errorTitle = $error['title'] ?? null;
$errorContent = $error['content'] ?? null;

?>

<h2><?= $h2Page ?></h2>

<form action="<?= $action ?>" method="POST">
    <label for="title">Titre :</label><br>
    <input type="text" id="title" name="title" placeholder="Saisir ici un titre" value="<?= $title ?>"><br>
    <p style="color: red;"><?= $errorTitle ?></p>
    <label for="content">Contenu :</label><br>
    <textarea id="content" name="content" rows="5" cols="33" placeholder="Saisir votre texte"><?= $content ?></textarea><br>
    <p style="color: red;"><?= $errorContent ?></p>

    <input type="submit" value="Publier">
</form>