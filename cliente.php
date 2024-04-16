<?php

class cliente{

    private $nombre;
    private $apellido;
    private $estadoDeBaja;
    private $tipoDocumento;
    private $numeroDocumento;

    public function __construct($nom, $apell, $bajaSiNo, $tipoDoc, $numDoc){
        $this->nombre=$nom;
        $this->apellido=$apell;
        $this->estadoDeBaja=$bajaSiNo;
        $this->tipoDocumento=$tipoDoc;
        $this->numeroDocumento=$numDoc;
    }

    //metodos getter y setter

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEstadoBaja(){
        return $this->estadoDeBaja;
    }
    public function getTipoDoc(){
        return $this->tipoDocumento;
    }
    public function getNumDoc(){
        return $this->numeroDocumento;
    }


    public function setNombre($newNom){
        $this->nombre=$newNom;
    }
    public function setApellido($newApell){
        $this->apellido=$newApell;
    }
    public function setEstadoBaja($newEstBaja){
        $this->estadoDeBaja=$newEstBaja;
    }
    public function setTipoDoc($newTipoDoc){
        $this->tipoDocumento=$newTipoDoc;
    }
    public function setNumDoc($newNumDoc){
        $this->numeroDocumento=$newNumDoc;
    }

    //metodo para retornar los atributos

    public function __toString(){
        return 
        "\n Nombre: ".$this->getNombre().
        "\n Apellido: ".$this->getApellido().
        "\n Estado de baja: ".$this->getEstadoBaja().
        "\n Tipo de documento: ".$this->getTipoDoc().
        "\n Numero de documento: ".$this->getNumDoc()
        ;

    }
}