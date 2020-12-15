<?php

require_once 'constants.php';
require_once 'classes/db.php';
require_once 'classes/block.php';
require_once 'classes/blockChain.php';
require_once 'controllers/blockChainController.php';
require_once 'views/header.php';




$request = $_SERVER['REQUEST_URI'];


switch($request){

    case root :

        echo 'ok';
        
        require 'views/welcome.php';

        break;

    case root . "newblockchain":

        require 'views/newBLockChain.php';

        break;

}


//Requests with GET


 if(isset($_GET['name'])){

    switch($request){
    
        case root  . 'createblockchain' . '?name=' . $_GET['name']  :
    
            createBlockChain($_GET['name']);

            break;
                   
    
    }
    


 }



