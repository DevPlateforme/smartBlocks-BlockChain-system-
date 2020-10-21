<?php

require_once 'header.php';

?>
    
    <form id='myForm' method='post' action='db/newBlock.php'>
        <input type='text' placeholder='nom de la blockchain' name='blockName'>  

        <input type='submit'>
    </form>




  <script>

      var myForm = document.getElementById('myForm');
     
    

  </script>


<?php

require_once 'footer.php';

?>