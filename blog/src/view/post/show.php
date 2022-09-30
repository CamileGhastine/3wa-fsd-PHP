<h2><?= htmlspecialchars($post->getTitle()) ?></h2>
<p>Publié le <?= $post->getCreated_at() ?></p>
<p><?= htmlspecialchars($post->getContent()) ?></p>
<p><a href="/post/delete?id=<?= $post->getId() ?>">❌</a><a href="/post/update?id=<?= $post->getId() ?>">🖊️</a></p>
