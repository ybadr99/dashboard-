<?php


class Users extends Model{

    protected $table="users";
    protected $cols=[];


    public function showUser()
    {
        $result = $this->getData();
        return $result;    
    }

    public function creatUser($fname , $lname , $email , $pass)
    {
        return $this->setUsers($fname , $lname , $email , $pass);
    }
    

}

    

?>