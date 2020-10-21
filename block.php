<?php


class Block
{
    public $nonce;

    public function __construct($index, $timestamp, $data, $previousHash = null)
      {
          $this->index = $index;
          $this->timeStamp = $timeStamp;
          $this->data = $data;
          $this->previousHash = $previousHash;
          $this->hash = $this->calculateHash();
          $this->nonce = 0;

      }

      public function calculateHash()
    {
        //we'll calculate the hash for the current block
       return hash("sha256", $this->index . $this->previousHash . $this->timestamp. ((string) $this->data). $this->nonce);

    }


}