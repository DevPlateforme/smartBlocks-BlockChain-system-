<!DOCTYPE html>

<html>

<head>

    <title>smartchain</title>
	<meta charset='UTF-8'></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>



<body>
    

<style>


        
        *{

        	margin:0;
        	padding: 0;
        } 

        body{

          background: darkBlue;
        	font-size: 3vw;
        
        }



      .mainLogoImg{

      	display: none;
       	height: auto;
       	width: 72.5%;

       }

        .navBar{

          position: fixed;
          bottom:0px;
          left:0px;
          height: 10%;
          width: 100%;
          background: rgb(0,0,0,0.8);
          display: flex;
          flex-direction: row;
          justify-content: space-between;
          align-items: center;
          z-index: 2;

        }		


       .navBarA{
       	   display: none;
       }

       .navBarB{

       	   height:100%;
       	   width:100%;
       	   display: flex;
       	   flex-direction: row;
       	   justify-content: flex-start;
       	   align-items: center;
       }

       .navBarBA{

       	  height: 100%;
       	  width: 100%;
       	  display: flex;
       	  flex-direction: row;
       	  align-items: center;
       	  justify-content: space-around; 

       }

       .navBarBAA{

       	 height: 80%;
      	 width: 50%;
      	 display:flex;
      	 justify-content:center;
      	 align-items: center;
         position: relative;
 	
       }

      .navBarBAB{
     	 height: 80%;
      	 width: 50%;
         display:flex;
      	 justify-content:center;
      	 align-items: center;
         position: relative;


       }



      .logoImg{

       	 height: 90%;
       	 width: auto;

       }



       .mobileLogoDiv{

       	 position:absolute;
       	 top:0px;
       	 left:0px;
       	 height:10%;
       	 width:100%;
       	 display:flex;
       	 flex-direction: row;
       	 justify-content:flex-end;
       	 align-items: center;

       }


       #mobileLogoDivImg{

       	  height: 80%;
       	  width: auto;
       	  margin-right: 5%;

       }



    .btnLink{

        position:absolute;
        top:0px;
        left:0px;
        height:100%;
        width: 100%;
    }
    

   



     @media only screen and (min-width: 800px){


     	body{     	        	

     		font-size: 0.7vw;



     	}




        .navBar{
           top:0px;
           height: 100%;
           width: 5%;
           flex-direction: column;
        }

        .mobileLogoDiv{

           display: none;

        }


        .hashContainer{

        	justify-content: center;
        }




       .navBarA{
       	   height: 20%;
       	   width: 100%;
       	   display: flex;
       	   justify-content: center;
       	   align-items: center;
       }




       .navBarB{

       	   height: 90%;
       	   width: 100%;
       	   display: flex;
       	   flex-direction: column;
       	   justify-content: flex-start;
       	   align-items: center;
       	   padding-top: 5%;

       }


      .navBarBA{

       	  height: 40%;
       	  width: 80%;
       	  display: flex;
       	  flex-direction: column;
       	  align-items: center;
       	  justify-content: space-around; 

       }

       .navBarBAA{

       	 height: 40%;
      	 width: 80%;
       	 display:flex;
      	 justify-content:center;
      	 align-items: center;

       }


      .navBarBAB{

      	height: 40%;
      	width: 80%;
      	display:flex;
      	justify-content:center;
      	align-items: center;

       }



        .mainLogoImg{

        	display: flex;

        }

       .logoImg{

       	 height: auto;
       	 width: 70%;

       }

       .moneyLogo{

       	   margin-right: 5%;

       }


   



   }

</style>



  
<div class ='navBar'>

<div class ='navBarA'>

       <a class='btnLink' href="<?php echo rootUrl ?>"></a> 

         <img class='mainLogoImg' src="img/smart.png">
    
</div>
<div class ='navBarB'>
    <div class ='navBarBA'>
        <div class='navBarBAA'>
            <a class='btnLink' href="<?php echo rootUrl ?>?createBlockchain"></a> 
            <img class='logoImg' src="img/create.png">
        </div>

        <div class='navBarBAB'>
        <a class='btnLink' href="<?php echo rootUrl ?>"></a> 
              <img class='logoImg' src="img/find.png">

        </div>
    </div>
</div>


</div>




<div>



</div>

