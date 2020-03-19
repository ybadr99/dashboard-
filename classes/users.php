<?php


class Users extends Model{

    protected $table="users";
    protected $cols=[];


    public function showUser()
    {
        $result = $this->getData();
        return $result;    
    }

    

}

    

?>