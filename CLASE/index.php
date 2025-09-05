<?php
//claase: Molde para crear mas objetos


class carro
{
    //atributos o propiedades (variables)
    public $color = "azul";
    public $marca = "Ferrari";
    public $modelo = "aventador";
    public $velocidad = 500;
    public $caballaje = 300;
    public $puestos = 2;

    //metodos, son acciones que hace el objeto (funciones)
    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function setVelocidad($velocidad)
    {
        $this->color = $velocidad;
    }
    public function getAcelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }
}




//crear el objeto / instanciar la clase 

$carroEspecial = new Carro();

echo "La velocidad del carro es: ".$carroEspecial->getVelocidad()."KM/H". "<br/>";
echo "El color del carro es: ". $carroEspecial->getColor(). "<br/>";

//cambiar el color del carro
echo "Ahora el color es: ". $carroEspecial->setColor("Amarillo"). "<br/>";
