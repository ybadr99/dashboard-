<?php

include "db.php";

    class Model extends DB{

        
        protected $table="";
        protected $cols=[];


        protected function getData()
        {   
            // $a = new static;
            $sql = "SELECT * FROM `$this->table` ";
            $stmt = $this->connect()->query($sql);
            
            return $stmt->fetchAll();
            
        }


        
        protected function getWhere($id)
        {   
            $sql = "SELECT * FROM posts WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            
            return $stmt->fetchAll();
            
        }


        protected function setPosts($title , $body , $author)
        {   
            $sql = "INSERT INTO posts(title, body,author) VALUES(? , ? , ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$title , $body , $author]);
            

        }

       public function Delete($id)
       {
           $sql = "DELETE FROM posts WHERE id = ?";
           $stmt = $this->connect()->prepare($sql);
           $stmt->execute([$id]);
       }
    
       public function Update($title, $body, $author, $id)
       {
           $sql = "UPDATE posts SET title = ? , body = ? , author = ? WHERE id = ?";
           $stmt = $this->connect()->prepare($sql);
           $stmt->execute([$title , $body , $author , $id]);
       }

    
    }

    
    // $ob = new Model;
    // $ob->Update('Update post' , 'this is update' , 'joe' , 17);



?>