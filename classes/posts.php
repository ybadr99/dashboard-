<?php

    // include "model.php";
    



class Posts extends Model{

    protected $table="posts";
    protected $cols=[];

    public function createPost($title , $body , $author)
    {
        return $this->setPosts($title , $body , $author);
    }

    public function showPost()
    {
        $result = $this->getData();
        return $result;    
    }

    

}




?>