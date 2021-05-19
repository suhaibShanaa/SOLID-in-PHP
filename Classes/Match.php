<?php

namespace Classes;

class Match 
{

    
    private $playerList; // 11 Player

    public function __construct( Array $players){

        $this->playerList=$players;
        
    }

    public function start(){
        echo "Start Play";
        echo "\n";

        foreach ($this->playerList as $player){
            $player->play();
            echo "\n";

        }
    }



}