<?php 

namespace Classes;

use Interfaces\KeepingInterface;
use Players\Child;

class  KeepingPlayer implements KeepingInterface {

    // public function play() {
    //     $keeper = new Child();   
    //     // $keeper = new Father();  
    //     echo $keeper->Keeping();
    // }
    

    public function Keeping() {
        
        $keeper = new Child();   
        echo $keeper->Keeping();
    }
}


