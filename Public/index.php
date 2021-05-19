<?php

require __DIR__ . '/../vendor/autoload.php' ;

$players=[]; 

// 5-5-1 the MAP 

for( $index=1; $index<6 ;$index++){ // 5 instance from Attack Player Interface
    array_push($players, new \Classes\AttackPlayer());
}

for( $index=1; $index<6 ;$index++){ // 5 instance from Defense Player Interface
    array_push($players, new \Classes\DefensePlayer());
}
// 1 instance from Kepping Player Interface
array_push($players, new \Classes\KeppingPlayer());


$match = new \Classes\Match($players);
$match->start();