<?php

namespace Classes;

class Match 
{

    private $attack;
    private $defense;
    private $kepper;

    public function __construct(){

        $this->attack= new Attack();
        $this->defense= new Defense();
        $this->kepper= new Kepper();

    }

    public function run(){
        echo "Start Play";
    }



}