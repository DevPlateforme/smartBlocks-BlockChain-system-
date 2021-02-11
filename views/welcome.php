Welcome :)


     <h3>Trouvez votre block</h3>



    <form action = "<?php echo rootUrl ?>" method="get">

       <input type="text" name='newBcName' placeholder='Nom de votre block'/>
       <input type="submit" value='créer une blockChain'/>

    </form>



  <br>

     <a href="<?php echo rootUrl ?>?createBlockchain"><button>Créez votre block-chain</button></a>



<?php


    require 'footer.php';

?>