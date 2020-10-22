<?php

class Admin{
    //Vamos a poner atributos
    private $id_admin;
    private $email_admin;
    private $passwd_admin;
    //Vamos a poner el contructor
    public function __construct($email_admin, $passwd_admin){
            $this->email_admin=$email_admin;
            $this->passwd_admin=$passwd_admin;

    /**
     * Get the value of id_admin
     */ 
    public function getId_admin()
    {
        return $this->id_admin;
    }

    /**
     * Set the value of id_admin
     *
     * @return  self
     */ 
    public function setId_admin($id_admin)
    {
        $this->id_admin = $id_admin;

        return $this;
    }

    /**
     * Get the value of email_admin
     */ 
    public function getEmail_admin()
    {
        return $this->email_admin;
    }

    /**
     * Set the value of email_admin
     *
     * @return  self
     */ 
    public function setEmail_admin($email_admin)
    {
        $this->email_admin = $email_admin;

        return $this;
    }

    /**
     * Get the value of passwd_admin
     */ 
    public function getPasswd_admin()
    {
        return $this->passwd_admin;
    }

    /**
     * Set the value of passwd_admin
     *
     * @return  self
     */ 
    public function setPasswd_admin($passwd_admin)
    {
        $this->passwd_admin = $passwd_admin;

        return $this;
    }
    }
    