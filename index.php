<?php

require_once 'constants.php';
require_once 'classes/db.php';
require_once 'classes/blockChain.php';
require_once 'classes/block.php';
require_once 'controllers/blockChainController.php';
require_once 'views/header.php';



//ROOTER


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


//New blockchain


 if(isset($_GET['newBcName'])){
     
     $newBlockChainName = $_GET['newBcName'];
    
     createBlockChain($_GET['newBcName']);
                   

 }


 
 if(isset($_GET['bcName'])){
        
    seeOneBlockChain($_GET['bcName']);
     
}



if(isset($_GET['newBlock'])){

     $offerer = $_GET['offerer'];
     $receiver = $_GET['receiver'];
     $value = $_GET['value'];
     $message = $_GET['message'];
     $blockChainName = $_GET['blockChainName'];

     $block =  new Block($offerer, $receiver, $value, $message);

     addBlock($blockChainName, $block);

}

