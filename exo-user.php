<?php 
session_start();

class User{
    private $name= 'Doe';
    private $firstname= 'John';
    private $email= 'John.Doe@domain.tld';
    private $password= 'mdpsepuersecure';

    public function__construct($name,$firstname,$email,$password){
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->password = $password;
    }
    public funtion getpassword(){
        return $this->password;
    }
    public funtion setpassword($password){
        $this->password = $password;
    }
    public funtion getemail(){
        return $this->email;
    }
    public funtion setpassword($email){
        $this->email = $email;
    }
}
?>