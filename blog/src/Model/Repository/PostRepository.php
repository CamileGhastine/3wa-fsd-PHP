<?php

namespace App\Model\Repository;

use App\Model\Entity\Post;
use PDO;

class PostRepository extends Repository
{
    public function findAll(): ?array
    {
        $request = $this->db->query('SELECT * FROM post ORDER BY created_at DESC');
        $request->setFetchMode(PDO::FETCH_CLASS, Post::class);

        return $request->fetchAll();
    }

    public function findOne(int $postId): ?Post
    {
        $request = $this->db->prepare("SELECT * FROM post WHERE id = :id");
        $request->bindParam('id', $postId);
        $request->setFetchMode(PDO::FETCH_CLASS, Post::class);
        $request->execute();

        return $request->fetch();
    }

    public function add(string $title, string $content): void
    {
        $request = $this->db->prepare('INSERT INTO post(`title`, `content`) VALUES (:title, :content)');
        $request->execute([
            'title' => $title,
            'content' => $content
        ]);
    }

    public function delete(int $postId): void
    {
        $request = $this->db->prepare('DELETE FROM post WHERE id=:id');
        $request->execute([
            'id' => $postId,
        ]);
    }

    public function update(int $id, string $title, string $content): void
    {
        $request = $this->db->prepare(
            'UPDATE post 
        SET title= :title, content=:content, created_at=:updated_at
        WHERE id=:id'
        );

        $request->execute([
            'title' => $title,
            'content' => $content,
            'id' => $id,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    // Faille : Pour se prémunir de l'injection SQL on va utiliser des requêtes préparées
}
