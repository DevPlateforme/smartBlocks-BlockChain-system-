<?php


function createBlockChain($blockChainName){

    global $db;

    //check if value already exists
    
    if(availableName($blockChainName) == false){
        echo 'ce nom de blockchain est déjà utilisé, veuillez en choisir un autre';
        return;
    }


    //if not used name, insert a new row into the table 'blockchains'


     $sql = "INSERT INTO blockchains(name) VALUES (:blockName)";
     $stmt = $db->prepare($sql);
     if(!($stmt->execute([':blockName' => $blockChainName]))){
 
       print_r($stmt->errorInfo());
      return;
     }
     

     //CREATE THE BLOCKCHAIN OBJECT

        $blockChain = new BlockChain($db, $blockChainName);

     //CREATE NEW BLOCKCHAIN TABLE

          $blockChain->createTable();

     //INSERT THE ORIGIN BLOCK INTO THIS TABLE 

       $blockChain->createGenesisBlock();

   
       echo 'you just created a block chain';


     //get the ID of the newly created element , to redirect it

     
     $sql = 'SELECT id FROM blockchains ORDER BY id DESC LIMIT 1';
     $stmt= $db->prepare($sql);
     $stmt->execute();


     $result = $stmt->fetchAll();


    //a key=>value array is sent.

     $id = $result[0]["id"];


     header('Location: ' . rootUrl . '?bcName=' . $blockChainName );


     //now, we collect the id of the table, by name and render it

 }


function seeOneBlockChain($blockChainName){



    global $db;

    //using sockets : every time there is an update, other dbs are updated.

    //So, using the id of the blockchain :


    $sql = 'SELECT :value1, :value2, :value3, :value4 FROM ' . $blockChainName ;

    $stmt = $db->prepare($sql);

    $stmt->execute([':value1' => 'offerer' , ':value2' => 'receiver' , ':value3' => 'value'  , ':value4' => 'hash']);


     $result = $stmt->fetchAll(PDO::FETCH_OBJ);


    require './views/seeOneBlockChain.php';

}




function availableName($blockChainName){  
    
    
        global $db;
    
    
        $sql = 'SELECT name FROM blockchains WHERE name = :blockChainName' ;

        $stmt = $db->prepare($sql);
        
        $stmt->execute([ ':blockChainName' => $blockChainName ]);




        if($stmt->rowCount() > 0){

            return false;

        } else {

            return true;

        };
         

   
}




function addBlock($databaseName , $block){


    global $db;


    //first, mine the block

    //manipulate the blockchain table through a blockchain object


    $blockChain = new BlockChain($db, $databaseName);


    try{
        $blockChain->addBlock($block);

        echo 'block ajouté!!';

    } catch (Exception $e){

        $e->getMessage();


    }



     
}