<?php

    include "include/autoloader.php";

    
    
    if (isset($_POST['addpost'])) {
        
        $po = new Posts;
        
        $title   = $_POST['title'];
        $body    = $_POST['body'];
        $author  = $_POST['author'];
        // $publish =  $_POST['publish'];

        



        $po->createPost($title , $body , $author);
        header("location:posts.php");
    }

    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];

        
        $ob = new Posts();
        $ob->Delete($id);
        
        header("location:posts.php");

    }

?>