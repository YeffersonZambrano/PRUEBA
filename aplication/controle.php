<?php

abstract class controller{
  
    protected $_view;
    
    public function __construct() {
        $this->_view = new View(new Request);
    }
    
    abstract public function index();
    
    protected function loadModel($modelo){
        
        $modelo = $modelo . 'Model';
        $rutaModelo = ROOT . 'models' . DS . $modelo . '.php';
        
        if (is_readable($rutaModelo)){
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        }  else {
            
            throw new Exception('Error de modelo');
        }
    }
    
    protected function getlibrary($library) {
        
       $rutalibreria = ROOT . 'libs' . DS . $libreria . '.php';
       if(is_readable($rutalibreria)){
           
           require_once '$rutalibraria';
       }
        
    }
}

?>

