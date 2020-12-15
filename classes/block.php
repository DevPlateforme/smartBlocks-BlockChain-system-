<?php
   

   class Block{


      function __construct($offerer, $receiver, $value, $message){

        $this->offerer = $offerer;

        $this->receiver = $receiver;

        $this->value = $value;

        $this->message = $message;

        $this->hash = '';

        $this->previousHash = '';

        $this->nonce = 0;

      }


      public function calculateHash(){

        $this->hash = hash("sha256" , $this->offerer . $this->receiver . $this->value . strtotime("now") . $this->nonce );                 

      }


      public function setPreviousHash($previousHash){

        $this->previousHash = $previousHash;
        
      }

   }