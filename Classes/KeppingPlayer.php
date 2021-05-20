<?php 

namespace Classes;

use Interfaces\PlayerInterface;
use Players\Child;
use Players\Father;

class KeppingPlayer implements PlayerInterface {

    // public function play() {
    //     $keeper = new Child();   
    //     // $keeper = new Father();  
    //     echo $keeper->Keeping();
    // }
    
    public function Attack() {
    }
    public function Defense() {
    }
    public function Keeping() {
        
        $keeper = new Child();   
        echo $keeper->Keeping();
    }
}


