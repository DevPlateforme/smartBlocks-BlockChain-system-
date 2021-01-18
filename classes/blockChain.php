<?php 
    

 class BlockChain{
     
    private $db;

    private $blockChainName;


    public function __construct($db, $blockChainName){

        $this->db = $db;

        $this->blockChainName = $blockChainName;

    }


    public function createTable(){


        //Then, how to pull out already existing blockchains?

        $tableName = $this->blockChainName;


        $sql = 'CREATE TABLE ' . $tableName  . '(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT , offerer VARCHAR(255) , receiver VARCHAR(255) , value INT , hash VARCHAR(100) , previousHash VARCHAR(100) )';
       
        $stmt = $this->db->prepare($sql);
   
        if(!($stmt->execute())){
    
          print_r($stmt->errorInfo());
   
         return;
     
        }
   
    }



    //Creation of genesis block

    public function createGenesisBlock(){

        $hash = hash("sha256", "offerer" . "receiver" . 0 . strtotime("now"));

        $sql = 'INSERT INTO ' . $this->blockChainName . '(offerer, receiver, value, hash) VALUES( :offerer , :receiver, :value , :hash)';

        $stmt = $this->db->prepare($sql);
  
        $stmt->execute([':offerer' => 'offerer' , ':receiver' => 'receiver' , ':value' => 'value'  , ':hash' => $hash ]);

    }





    public function addBlock($block){


        $blockChainTable = $this->blockChainName;

        $blockOfferer = $block->offerer;
        $blockReceiver = $block->receiver;
        $blockValue = $block->value;
        $blockMessage = $block->message;
        $blockHash = $block->hash;


        $block->setPreviousHash($this->getLastBlockHash());
               
        $this->mineBlock($block);


         //add a new row to the blockchain table


         try{

            $sql = 'INSERT INTO ' . $this->blockChainName . '(offerer, receiver, value, hash , previousHash ) VALUES( :offerer , :receiver, :value , :hash, :previousHash )';
   
            $stmt = $this->db->prepare($sql);
      
            $stmt->execute([':offerer' => $blockOfferer , ':receiver' => $blockReceiver , ':value' => $blockValue  , ':hash' => $block->hash , ':previousHash' => $block->previousHash ]);
           
                
         }catch(Exception $e){

            $e->getMessage();

         }
         
    }



    private function mineBlock($block){


        while( substr($block->hash, 0 , 4) !== "0000") {

               $block->nonce++;
               $block->calculateHash();
            
        }


        echo 'block miné! </br>';

        
     }   



     private function getLastBlockHash(){

        $blockChainTable = $this->blockChainName;

        try{
            
            $sql = 'SELECT hash FROM '.   $blockChainTable  . ' ORDER BY id DESC LIMIT 1';
            $stmt= $this->db->prepare($sql);
            $stmt->execute();

            $result = $stmt->fetchAll();
             return $result[0][0];

        
        } catch(Exception $e){

            $e->getMessage();
        }

     }




  }






 /*


class blockChainFactory
{

    public function createBlockChain();


 }






 
 class blockChain{


    public function __construct($name){

        $this->name = $name;

        $this->chain = [$this->createGenesisBlock()];

        $this->difficulty = 4;

    }



    //Creation of genesis block

    private function createGenesisBlock(){

        return new Block(0, strtotime("now") , "Genesis Block" );

    }

    



    public function getName(){

        return $this->name;
        
    }



    public function getLastBlock(){

        return $this->chain[count($this->chain)-1];

    }



    public function pushBlock($block){

        //TAKE THE GIVEN OBJECT, AND GIVE ITS 'PREVIOUSHASH' PROPERTY VALUE THE HASH OF THE CHAIN'S LAST BLOCK

        $block->previousHash = $this->getLastBlock()->hash;

        //THEN, MINE THE BLOCK
        $this->mine($block);

        //ADD THE NEW BLOCK TO THE END OF THE CHAIN
        array_push($this->chain, $block);

    }




    public function mine($block){


        //AFTER IT WAS PASSED THE HASH VALUE OF THE PREVIOUS BLOCK, IT SIMPLY REQUIRES A CERTAIN NONCE TO CALCULATE A VALID HASH



        //WE'LL INCREMENT THE NONCE (INITIALIZED AT 0), AS LONG AS THE HASH DOESNT START BY THE NUMBER OF 0s WE FIXED (WE FIXED A DIFFICULTY OF FOUR, WHICH MEANS 4 ZEROS)
        

          //while the 4 first values are not a repetiton of difficulty X "0'
        while( substr($block->hash, 0 , $this->difficulty) != str_repeat("0", $this->difficulty)){

              //increase the nonce of the provided block
              $block->nonce++;

              //If the hash doesn't have the required value, the loop will go on

              $block->hash = $block->calculateHash();
              
        }


        echo 'block miné:' . $block->hash . "\n";        
    }




    //VALIDATE THE BLOCKCHAIN'S INTEGRITY. TRUE IF VALID, FALSE OTHERWISE

    
    public function isValid(){

        for($i = 1 ; $i < count($this->chain) ; $i++){


            $checkedBlock = $this->chain[$i];
            $previousBlockChecked = $this->chain[$i - 1];

            
              //We loop on every block, and break the function if one hash is incorrect


              if($checkedBlock->hash != $checkedBlock->calculateHash()){

                  //the chain was altered

                  return false;
              }


              //If the right hash was found, check now if the previous block hash

              if($checkedBlock->previousHash != $previousBlockChecked->hash){

                 return false;

            }

            

        }



        //If the function didn't break, then it is valid


             return true;



    }







 }





 */