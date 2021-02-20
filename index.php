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


}


//New blockchain



if(isset($_GET['createBlockchain'])){
     
        require 'views/newBLockChain.php';

        return;
                
}


 if(isset($_GET['newBlockchain'])){
     
     createBlockChain($_GET['newBlockchain']);
                   
 }


 
 if(isset($_GET['bcName'])){
        
    seeOneBlockChain($_GET['bcName']);
     
}



if(isset($_GET["findBlockchain"])){

     findBlockChain($_GET['searchedBlockchain']);
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

