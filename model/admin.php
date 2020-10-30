<?php

require_once '../model/persona.php';

class Admin extends Persona{

    //Vamos a poner atributos
    
    private $id_admin;

    //Vamos a poner el contructor
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
}