<?php

class moto{

    private $codigo;
    private $costo;
    private $anoFabricacion;
    private $descripcion;
    private $porcentajeIncrementoAnual;
    private $activa;

    public function __construct($code, $cost, $anoFabri, $desc, $porcenIncre, $acti){
        $this->codigo=$code;
        $this->costo=$cost;
        $this->anoFabricacion=$anoFabri;
        $this->descripcion=$desc;
        $this->porcentajeIncrementoAnual=$porcenIncre;
        $this->activa=$acti;
    }

    //setter y getter

    public function getCodigo(){
        return $this->codigo;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getAnioFabri(){
        return $this->anoFabricacion;
    }
    public function getDesc(){
        return $this->descripcion;
    }
    public function getporcenIncre(){
        return $this->porcentajeIncrementoAnual;
    }
    public function getActiva(){
        return $this->activa;
    }



    public function setCodigo($newCode){
        $this->codigo=$newCode;
    }
    public function setCosto($newCosto){
        $this->costo=$newCosto;
    }
    public function setAnioFabri($newAnioFabri){
        $this->anoFabricacion=$newAnioFabri;
    }
    public function setDesc($newDesc){
        $this->descripcion=$newDesc;
    }
    public function setPorcenIncre($newPorcenIncre){
        $this->porcentajeIncrementoAnual=$newPorcenIncre;
    }
    public function setActiva($newActiva){
        $this->activa=$newActiva;
    }

    //redefinicion del metodo __toString

    public function __toStringMoto(){
        return
        "\n Codigo: ".$this->getCodigo().
        "\n Costo:".$this->getCosto().
        "\n Año fabricacion: ".$this->getAnioFabri().
        "\n Descripcion: ".$this->getDesc().
        "\n Porcentaje incremento anual: %".$this->getporcenIncre().
        "\n Activa: ".$this->getActiva()
        ;
    }

    public function darPrecioVenta(){
        if($this->getActiva()){
            $venta=$this->getCosto()+$this->getCosto()*((2024-$this->getAnioFabri())*$this->getporcenIncre());
        }else{
            $venta=-1;
        }
        return $venta;
    }

    public function darEstado(){
        $estado=$this->getActiva();
        if($estado){
            $msj="si";
        }else{
            $msj="no";
        }
        return $msj;
    }
}