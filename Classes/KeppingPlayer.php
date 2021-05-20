<?php 

namespace Classes;

use Interfaces\KeppingInterface;
use Players\Child;

class KeppingPlayer implements KeppingInterface {

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


