<?php
include('persona.php');
class aprendiz extends persona{
    private $nombre;
    private $documento;
    private $ficha;

function ___construct($nombre,$documento,$ficha,$ciudad,$telefono){
    $this->nombre = $nombre;
    $this->documento = $documento;
    $this->ficha = $ficha;
    
}


function setNombre($nombre){
    $this->nombre=$nombre;
}

function setDocumento($documento){
    $this->documento=$documento;
}

function setFicha($ficha){
   $this->ficha=$ficha;
}

function getFicha(){
    return $this->ficha;
}

function getDocumento(){
    return $this->documento;
}

function getNombre(){
    return $this->nombre;
}

}
echo '<center>';
$ob=new aprendiz();
$ob->setNombre("andres lozano" );
$ob->setDocumento(1000786550);
$ob->setFicha(2142329);
echo $ob->getDocumento();
echo '<br>';
echo $ob->getNombre();
echo '<br>';
echo $ob->getFicha();
echo '</center>';
echo $ob->datos();
?>