<?php
class user{
  
    private $id;
    private $name;
    private $email ;
    
   



    public function __construct($id, $name,$email){
     
        $this->id = $id;
        $this->name = $name;
       
        $this->email = $email;


    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }
}

?>