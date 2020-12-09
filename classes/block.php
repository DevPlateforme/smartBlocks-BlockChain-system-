<?php


class block{
    

    private $index;

    private $hash;

    private $timeStamp;

    private $data;
    
    private $previousHash = null;

    private $nonce = 0;



     function __construct($index, $timeStamp, $data){


        $this->index = $index;

         $this->$timeStamp = $timeStamp;

         $this->data = $data;

     }


    
     public function calculateHash(){


           //CALCULATION OF THE HASH FOR THE CURRENT BLOCK


           return hash("sha256", $this->index, $this->timeStamp . strVal($this->data) . $this->nonce );
     }
     







}
