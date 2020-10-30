<?php

require_once '../model/persona.php';

class Alumnos extends Persona{
    //Vamos a poner atributos

    private $nombre_alum;
    private $apellido_alum_p;
    private $apellido_alum_m;


    /**
     * Get the value of nombre_alum
     */ 
    public function getNombre_alum()
    {
        return $this->nombre_alum;
    }

    /**
     * Set the value of nombre_alum
     *
     * @return  self
     */ 
    public function setNombre_alum($nombre_alum)
    {
        $this->nombre_alum = $nombre_alum;

        return $this;
    }

    /**
     * Get the value of apellido_alum_p
     */ 
    public function getApellido_alum_p()
    {
        return $this->apellido_alum_p;
    }

    /**
     * Set the value of apellido_alum_p
     *
     * @return  self
     */ 
    public function setApellido_alum_p($apellido_alum_p)
    {
        $this->apellido_alum_p = $apellido_alum_p;

        return $this;
    }

    /**
     * Get the value of apellido_alum_m
     */ 
    public function getApellido_alum_m()
    {
        return $this->apellido_alum_m;
    }

    /**
     * Set the value of apellido_alum_m
     *
     * @return  self
     */ 
    public function setApellido_alum_m($apellido_alum_m)
    {
        $this->apellido_alum_m = $apellido_alum_m;

        return $this;
    }
}