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


        
        public function getWhere($id)
        {   
            $sql = "SELECT * FROM `$this->table` WHERE id = ?";
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
           $sql = "DELETE FROM `$this->table` WHERE id = ?";
           $stmt = $this->connect()->prepare($sql);
           $stmt->execute([$id]);
       }
       
       protected function setUsers($fname , $lname , $email , $pass)
       {   
           $sql = "INSERT INTO `$this->table`(fname, lname , email , password ) VALUES(? , ? , ? , ?)";
           $stmt = $this->connect()->prepare($sql);
           $stmt->execute([$fname , $lname , $email , $pass]);
           
           
        }
        
           public function Update($title, $body, $author, $id)
           {
               $sql = "UPDATE posts SET title = ? , body = ? , author = ? WHERE id = ?";
               $stmt = $this->connect()->prepare($sql);
               $stmt->execute([$title , $body , $author , $id]);
           }
    
    }

    
    


?>