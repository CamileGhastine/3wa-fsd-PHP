<h2>Tous les articles</h2>
<p>Ecrire un article <a href="/post/add">➕</a></p>

<?php foreach($posts as $post) : ?>
    <div id="posts">
        <h3><a href="/post/show?id=<?= $post->getId() ?>"><?= htmlspecialchars($post->getTitle()) ?></a> </h3>
        <p><?= htmlspecialchars($post->getContent()) ?></p>
    </div>
<?php endforeach; ?>

<!-- Utilisation de htmlspecialchars pour se protéger de la faille XSS. -->