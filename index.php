<?php

require_once 'header.php'

?>


<h1>Bienvenue dans Smart Block</h1>

<h3>Désireux d'avoir un système sécurisé, et fiable pour inscrire vos transactions entre amis?</h3>




<a href='newBlock.php'><button>Créer un block</button></a>



<form method='post' action='findBlock.php'>
     <input type='text' placeholder='trouver un block'>
</form>


<?php

require_once 'footer.php'

?>