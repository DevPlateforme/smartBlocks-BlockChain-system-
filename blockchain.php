<?php

require_once("./block.php");


//A blockchain class functioning with proof of work


class blockchain
{
     //Instantiate a new blockChain


    public function __construct()
    {

        $this->chain = [$this->createGenesisBlock()];
        $this->diffuculty = 4;

    }

    //creation of the genesis block

    private function createGenesisBlock()
    {
        return new Block(0, strtotime("now"), "Genesis Block" );
    }




    public function getLastBlock()
    {

        return $this->chain[count($this->chain)-1];
    }

    //push a new block onto the chain

    public function push($block)
    {

        $block->previousHash = $this->getLastBlock()->hash;
        $this->mine($block);
        array_push($this->chain, $block);
    }

    //Mines a block.


    public function mine($block){

        //we'll increment the nonce, as long as the hash doesn't start by 4 zeros

        while (substr($block->hash, 0, $this->difficulty)!= str_repeat("0", $this->difficulty)) {
            $block->nonce++;
            //we'll chance the property hash of the block. Then, if it doesn't have the required value, the loop will go on
            $block->hash = $block->calculateHash();
        }

        echo "block miné: " . $block->hash . "\n";

    }


    //Validates the blockchain integrity. True if the blockchain is valid, false otherwise.

    public function isValid(){

        for ($i = 1; $i < count($this->chain); $i++){
            
            $currentBlock = $this->chain[$i];
            $previousBlock = $this->chain[$i - 1];

            //we loop on every block, and recalculate their hash. If one of the hash isn't valid, we know there was a corruption
        

        if ($currentBlock->hash != $currentBlock->calculateHash()){

            return false;
        }
        
        //but we'll also make sure that, even though the hash is the same, the last is hash is equal and there was no corruption (we can obtain the same hash, with different inputs)

        if($currentBlock->previousHash != $previousBlock->hash){

            return false;

        }
    }

    //else 

    return true;

}