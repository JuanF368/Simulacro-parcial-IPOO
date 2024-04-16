<?php

class venta{

    private $numero;
    private $fecha;
    private $objCliente;
    private $arrayMotos;
    private $precioFinal;

    //metodo construct

    public function __construct($num, $date, $cliente,$colMotos, $precioFin){
        $this->numero=$num;
        $this->fecha=$date;
        $this->objCliente=$cliente;
        $this->arrayMotos=$colMotos;
        $this->precioFinal=$precioFin;
    }

    //getter y setter

    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getCliente(){
        return $this->objCliente;
    }
    public function getMotos(){
        return $this->arrayMotos;
    }
    public function getPrecioFinal(){
        return $this->precioFinal;
    }


    public function setNumero($newNumero){
        $this->numero=$newNumero;
    }
    public function setFecha($newFecha){
        $this->fecha=$newFecha;
    }
    public function setCliente($newCliente){
        $this->objCliente=$newCliente;
    }
    public function setMotos($newMotos){
        $this->arrayMotos=$newMotos;
    }
    public function setPrecioFinal($newPrecioFinal){
        $this->precioFinal=$newPrecioFinal;
    }

    //redefinicion del metodo __toString

    public function __toString(){
        $moto="";
        return
        "\n Numero: ".$this->getNumero().
        "\n Fecha: ".$this->getFecha().
        "\n Cliente: ".$this->getCliente().
        "\n Motos: ".$this->ImprimirMotos().
        "\n Precio Final: ".$this->getPrecioFinal()
        ;
    }

    public function ImprimirMotos(){
        $colMotos=$this->getMotos();
        $cadena=" ";
        $numMoto=0;
        for ($i=0;$i<count($colMotos);$i++){
            $numMoto++;
            $moto = $colMotos[$i];
            $cadena = $cadena."Moto: ".$numMoto."\n".$moto;
        }
        return $cadena;
    }

    public function incorporarMoto($objMoto){
        $coleccionMotos=$this->getMotos();
        $precioVenta=$this->darPrecioVenta();
        $estado=$this->darEstado();
        if($precioVenta != -1 && $estado=="si"){
            $coleccionMotos[]=$objMoto;
            $this->setPrecioFinal($this->getPrecioFinal()+$precioVenta);
            $this->setMotos($coleccionMotos);
        }  
    }
}