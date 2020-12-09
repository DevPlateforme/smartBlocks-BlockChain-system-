<?php



function createBlockChain($blockChainName){

    global $db;

    //if not used name, insert a new row into the table 'blockchains'

     $sql = "INSERT INTO Blockchains(name) VALUES (:blockName)";


     $stmt = $db->prepare($sql);
    
     if(!($stmt->execute([':blockName' => $blockChainName]))){
 
       print_r($stmt->errorInfo());

      return;
  
     }


     echo 'you just created a block chain';



     //get the ID of the newly created element


     $sql = 'SELECT id FROM Blockchains ORDER BY id DESC LIMIT 1';

     $stmt= $db->prepare($sql);

     $stmt->execute();


     $result = $stmt->fetchAll();


    //a key=>value array is sent.

     $id = $result[0]["id"];


    //redirect to the visualization method

    seeOneBlockChain($id);

}


function seeOneBlockChain($id){

    //WHAT YOU ACTUALLY WANT : ALL THE BLOCKS (SO A QUERY IS DONE USING THE FUNCTION GET BLOCKS. FOR EACH ROW, WE CREATE AN OBJECT, AND INSERT IT IN THE ROW. THAT WAY, WE LL INTERACT EASILY WITH IT.)
        
    //WHEN THE BLOCK IS UPDATED BY A USER : THE ARRAY THAT WAS PASSED IS UPDATED WITH THE NEW ARRAY (with new objects).

    //THEN, WE CREATE A NEW OBJECT WITH THE NEW ELEMENT. WE GIVE IT THE PROPERTY 'last block' of our last block : previous block.

    //THEN, WE MINE. IF WE PROVIDE THE RIGHT HASH : WE CHECK IF DURING OUR SEARCH, THE DB DIDNT CHANGE :

    //SO, WE'LL TRUST SOCKETS.


    //THIS LIST WILL BE UPDATED


    require './views/seeOneBlockChain.php';

}