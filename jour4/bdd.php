<?php

$bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$sql = 'SELECT * FROM post';

$request = $bdd->query($sql);
$request->setFetchMode(PDO::FETCH_CLASS, 'Post');

$posts = $request->fetchAll();

echo '<pre>';
var_dump($posts[0]);
echo '<pre/>';
$post0=$posts[0];

echo $post0->getTitle();
echo '<br>';
echo $post0->getContent();
echo '<br>';
echo 'crée le '.$post0->getCreated_at();
echo '<br>';

class Post
{
    private $id;
    private $title;
    private $content;
    private $created_at;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }


    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        // transforme la date au format francais
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}