
<style>


body{

   background:darkBlue;
}

#searchBar{

position: relative;
top: 35vh;

height: 20.5vh;

width:50vw;

left: 25vw;

border-radius: 20px;

background: white;

display: flex;

justify-content: center;

align-items: center;

}


#logoContainer{

position: relative;
height: 80%;
width: width:15%;
right: 2%;
bottom:10%;
display: flex;
justify-content: center;
align-items: center;
}

#searchLogo{

height: 80%;
width: auto;
}



#searchInput{


height: 100%;
width: 100%;
font-size: 4vw;
background: none;
border:none;
outline: none;
color: rgb(0,0,0,0.7);

}


#logoContainer{

 display: flex;
 justify-content: center;
 align-items: center;

 } 


 #errorMsgContainer{
    position: absolute;
    bottom: 20vh;
    left:27.5vw;
    width: 30vw;
    font-size: 1.5vw;
    color:white;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;

 }



 #errorMsgContainer{

    position: absolute;
    bottom: 20vh;
    height: 10%;
    width: 80%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
 }

 #errorImgContainer{
    height: 100%;
    width: 20%;
 }

 #errorImg{

    height: 80%;
    width: auto;


 }


#searchBtn{

   position: absolute;
   top: 0px;
   left: 0px;
   height:100%;
   width: 100%;
   cursor: pointer;
   opacity:0;
}


#searchBlockForm{
  
  opacity: 0;

}


#messageDiv{

   opacity: 0;
}

</style>







     
<div id='searchBar'>

<input placeholder="Find your block" type="" name="" id="searchInput">

<div id='logoContainer'>
     <button onclick='searchBlock()' id='searchBtn'></button>
     <img id='searchLogo' src="img/search.png">
   </div>
 </div>


<div id ='errorMsgContainer'> 

  <div id='messageDiv'>Sorry , we didn't find your block...</div>

 <div id='errorImgContainer'>    
    
 </div>


</div>



  <br>

     <a href="<?php echo rootUrl ?>?createBlockchain"><button>Créez votre block-chain</button></a>

<?php

    require 'footer.php';

?>





<script>




function searchBlock(){

//if no input is empty
   
  document.getElementById("searchedBcName").value = document.getElementById("searchInput").value ;



  //submit the form


  document.getElementById('searchBlockForm').submit();


  //ajax request


}




</script>




<form id='searchBlockForm' action = "<?php echo rootUrl ?>" method="get">

<input type="text" id='searchedBcName' name='searchedBlockchain' placeholder='Nom de votre chaîne'/>
<input type="submit" name='findBlockchain' value='Trouver une blockChain'/>

</form>
