<style type="text/css">



   
  body{
       
     background: lightBlue;
  }


  .blocksImg{
      position: absolute;
      top: 5%;
      height: auto;
      width: 85%;
      right: 7.5%;

   }


   
   #textDiv{

          position:absolute;
          top:60vh;
          left:10vw;
          height:50vh;
          width:80vw;
          display: flex;
          flex-direction: column;
          align-items: center;

   }
   


 #textDivB{
           height: 30%;
           width: 100%;
           display: flex;
           flex-direction: column;
           align-items: flex-start;
           justify-content: space-around;
   
   }


   .inputContainer{
          height:45%;
          width:100%;
          display:flex;
          justify-content:center;
          align-items:center;
          border-radius: 5px;
          background: white;
   }


   .inputBox{
     height:100%;
     width:100%;
     background:none;
     border:none;
     outline:none;
   }


   .createBtn {
    height: 40%;
    width: 65%;
    background: blue;
    color: white;
    border-radius: 10px;
    border: none;
    outline: none;
    margin-left: 15%;
}






@media screen and (min-width: 600px){
  .blocksImg{
      position: absolute;
      top: 12.5%;
      height: auto;
      width: 32.5vw; 
      right: 10%;
   }


   #textDiv{

          position:absolute;
          top:30vh;
          left:10vw;
          height:50vh;
          width:40vw;
          display: flex;
          flex-direction: column;
          align-items: center;

   }


   #textDivA{
           height:70%;
           width:100%;
           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: space-around;
   }


   #textDivAA{
            font-size:4vw;
            display: flex;
            justify-content: center;
            align-items: center;
   }

   #textDivAAA{
          height:70%;
          width:100%;
   }

   #textDivAB{
            font-size:4vw;
   }

   .createBtn{

            height: 40%;
            width: 45%;
            background: blue;
            color:white;
            border-radius:10px;
            border:none;
            outline: none;
   }




   #textDivB{
           height: 30%;
           width: 100%;
           display: flex;
           flex-direction: column;
           align-items: flex-start;
           justify-content: space-around;
   
   }


  .inputContainer{
          height:45%;
          width:85%;
          display:flex;
          justify-content:center;
          align-items:center;
          border-radius: 5px;
          background: white;
   }


   .inputBox{
     height:100%;
     width:100%;
     background:none;
     border:none;
     outline:none;
   }



}










	</style>


   <img class='blocksImg' src="img/blocks.png">


     <div id='textDiv'>
       <div id='textDivA'>
              <div id='textDivAA'>

                     <div id='textDivAAA'>	
                            Create your own blockchain
                     </div>
              </div>
              <div id='textDivAB'></div>
       </div>
       <div id='textDivB'>
              <div class='inputContainer'>
                     <input id='newBcSearchInput' type="text" placeholder="blockchain name" class="inputBox">
               </div>
              <button style='cursor:pointer' onclick='createBlock()' class='createBtn'>create</button>
       </div>
    </div>





<script>




function createBlock(){

//if no input is empty
   
  document.getElementById("newBcInput").value = document.getElementById("newBcSearchInput").value ;



  //submit the form


  document.getElementById('newBcForm').submit();


  //ajax request


}


</script>

<form id='newBcForm' style='opacity:0' action = "<?php echo rootUrl ?>" method="get">

       <input id='newBcInput' type="text" name='newBlockchain' placeholder='Nom de votre block'/>
       <input type="submit" value='créer une blockChain'/>

</form>
