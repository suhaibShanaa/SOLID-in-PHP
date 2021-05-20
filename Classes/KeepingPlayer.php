<?php 

namespace Classes;

use Interfaces\PlayerInterface;
use Interfaces\KeepingInterface;
use Players\Child;

class  KeepingPlayer implements PlayerInterface,KeepingInterface {

    // public function play() {
    //     $keeper = new Child();   
    //     // $keeper = new Father();  
    //     echo $keeper->Keeping();
    // }
    

    public function Keeping() {
        
        $keeper = new Child();   
        echo $keeper->Keeping();
    }
    public function Play() {
        $this->Keeping();
    }
}


