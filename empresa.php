<?php

class empresa{

    private $denominacion;
    private $direccion;
    private $arrayClientes;
    private $arrayMotos;
    private $arrayVentas;

    //metodo constructor

    public function __construct($denom, $direcc, $colClientes, $colMotos, $colVentas){
        $this->denominacion=$denom;
        $this->direccion=$direcc;
        $this->arrayClientes=$colClientes;
        $this->arrayMotos=$colMotos;
        $this->arrayVentas=$colVentas;
    }

    //getter y setter

    public function getDenom(){
        return $this->denominacion;
    }
    public function getDirecc(){
        return $this->direccion;
    }
    public function getClientes(){
        return $this->arrayClientes;
    }
    public function getMotos(){
        return $this->arrayMotos;
    }
    public function getVentas(){
        return $this->arrayMotos;
    }


    public function setDenom($newDenom){
        $this->denominacion=$newDenom;
    }
    public function setDirecc($newDirecc){
        $this->direccion=$newDirecc;
    }
    public function setColCliente($newColCliente){
        $this->arrayClientes=$newColCliente;
    }
    public function setColMotos($newColMotos){
        $this->arrayMotos=$newColMotos;
    }
    public function setColVentas($newColVentas){
        $this->arrayVentas=$newColVentas;
    }


    //redefinicion metodo __toString

    public function __toString(){
        return 
        "\n Denominacion: ".$this->denominacion.
        "\n Direccion: ".$this->direccion.
        "\n Clientes: ".$this->ImprimirClientes().
        "\n Motos: ".$this->ImprimirMotos().
        "\n Ventas: ".$this->ImprimirVentas()
        ;
    }

    public function ImprimirClientes(){
        $colClientes=$this->getClientes();
        $cadena=" ";
        $numCliente=0;
        for($i=0;$i<count($colClientes);$i++){
            $numCliente++;
            $cliente=$colClientes[$i];
            $cadena=$cadena."Cliente: ".$numCliente."\n".$cliente;
        }
        return $cadena;
    }
    public function ImprimirMotos(){
        $colMotos=$this->getMotos();
        $cadena=" ";
        $numMoto=0;
        for($i=0;$i<count($colMotos);$i++){
            $numMoto++;
            $moto=$colMotos[$i];
            $cadena=$cadena."Moto: ".$numMoto."\n".$moto;
        }
        return $cadena;
    }
}