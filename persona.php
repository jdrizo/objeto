<?php
class persona{
    protected$ciudad;
    protected $telefono;

function ___construct($ciudad,$telefono){
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;
    }
    function datos(){
        return 'vive en:' .$this->$ciudad 'y su numero es:' .$this->$telefono;
    }
}
?>