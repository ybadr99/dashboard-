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

    if(isset($_GET['deletePost']))
    {
        $id = $_GET['deletePost'];

        
        $ob = new Posts();
        $ob->Delete($id);
        
        header("location:posts.php");

    }
    if (isset($_POST['addUser'])) {
        
        $po = new Users;
        
        $fname     = $_POST['fname'];
        $lname     = $_POST['lname'];
        $email     = $_POST['email'];
        $password  = $_POST['password'];
 
        $po->creatUser($fname , $lname , $email , $password);
    
        header("location:users.php");
    }


    if(isset($_GET['deleteUser']))
    {
        $id = $_GET['deleteUser'];

        
        $ob = new Users();
        $ob->Delete($id);
        
        header("location:users.php");

    }

    if(isset($_POST['editPost']))
    {
        $id = $_POST['id'];
        $title   = $_POST['title'];
        $body    = $_POST['body'];
        $author  = $_POST['author'];
        $po = new Posts;

        $po->Update($title , $body , $author , $id);
        header("location:posts.php");
    

    }
?>