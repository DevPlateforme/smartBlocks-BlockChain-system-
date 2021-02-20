Welcome :)


     <h3>Trouvez votre block</h3>



    <form action = "<?php echo rootUrl ?>" method="get">

       <input type="text" name='searchedBlockchain' placeholder='Nom de votre chaîne'/>
       <input type="submit" name='findBlockchain' value='Trouver une blockChain'/>

    </form>



  <br>

     <a href="<?php echo rootUrl ?>?createBlockchain"><button>Créez votre block-chain</button></a>

<?php


    require 'footer.php';

?>