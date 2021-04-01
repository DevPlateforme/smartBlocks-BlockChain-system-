<style type="text/css">
        
        *{

        	margin:0;
        	padding: 0;
        } 

        body{

          background: darkBlue;
        	font-size: 3vw;
       	  color: rgb(0,255,0,0.75);
        
        }




      .mainLogoImg{

      	display: none;
       	height: auto;
       	width: 72.5%;

       }


      .logoImg{

       	 height: 80%;
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



      .mainDiv{

       	  position: absolute;
       	  top:10.5%;
       	  left:5%;
          height:150%;
          width:90%;
          display: flex;
          flex-direction: column;
          justify-content: space-around;
          align-items: center;

       }


       .mainDivA{

         height: 15%;
         width: 100%;
         display: flex;
         flex-direction: row;
         justify-content: space-between;
         align-items: center;
       
       }


       .mainDivAA{

       	 height: 100%;
       	 width: 47.5%;
         background: rgb(255,255,255,0.1);
         border-radius: 15px;
       
       }


       #mainDivAALeft{

           display: none
       
       }


       #mainDivAARight{

        width: 100%;
       }

       #mainDivAARightA{
         height:80%;
         width:100%;
         display:flex;
         flex-direction:column;
         justify-content:space-around;
         align-items:center;  
        }

        #mainDivAARightB{
          height: 20%;
          width: 100%;
          display: flex;
          justify-content: space-between;
          align-items: center;
        }

        #errorDiv{

          height: 80%;
          width: 60%;
          display: flex;
          justify-content: flex-wrap;
          align-items:center;
          padding-left:10%;
          opacity:0;

        }

        #mainDivAARightBA{

          height: 80%;
          width:30%;
          background: rgb(255,255,255,0.15);      
          margin-right:10%;
          font-size:2vw;
          display:flex;
          justify-content: center;
          align-items: center;
          position:relative;
        }

          #createBtn{

           position: absolute;
           top: 0px;
           left: 0px;
           height:100%;
           width:100%;
           opacity:0;
           outline:none;
           border:none;
           cursor:pointer;
        }



        #mainDivAARightAA{

          height: 20%;
          width: 80%;
          display: flex;
          flex-direction: row;
          justify-content: space-between;
          align-items: center;


        }

        .mainDivAARightAAA{

          height: 95%;
          width: 47.5%;
          background: rgb(255,255,255,0.75);      

          position:relative;

        }

    



        #mainDivAARightAB{

          height: 20%;
          width: 80%;
          background: rgb(255,255,255,0.75);    
          position:relative;
  

        }


        #mainDivAARightAC{
          height: 20%;
          width: 80%;
          display: flex;
          flex-direction: row;
          justify-content: flex-start;
          align-items: center;

        }

        #mainDivAARightACA{


          background: rgb(255,255,255,0.75);      
          height: 100%;
          width: 100%;
          position:relative;

        }

        .blockInput{

          height: 100%;
          width:100%;
          background:none;
          border: none;
        }


      




       #mainDivAALeftA{

           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: space-around;
           height: 100%;
           width: 50%;

       }

       #mainDivAALeftATop{

             height: 20%;
             width: 100%;
             display: flex;
             flex-direction: column;
             justify-content: flex-start;
             align-items: center;
       }

       #mainDivAALeftATopA{

             height: 45%;
             width: 100%;
             display: flex;
             flex-direction: column;
             justify-content: flex-start;
             align-items: center;

       }



       #mainDivAALeftABottom{

             height: 50%;
             width: 100%;
             display: flex;
             flex-direction: column;
             justify-content: space-around;
             align-items: center;
       }

       .mainDivAALeftABottomA{
          height: 15%;
          width: 100%;
          display: inline-flex;
          flex-direction: row;
          justify-content: space-between;
       }

       .mainDivAALeftABottomAA{

            background: purple;
            height: 100%;
            width: 7.5%;
            border-radius: 1px;
       }

       .mainDivAALeftABottomAB{

            height: 100%;
            width: 85%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size:0.625vw;

       }







       #mainDivAALeftAA{

       	 height: 10%;
       	 width: 95%;
       	 flex-direction: row;
       	 align-items: center;
       	 justify-content: flex-start;
       	 margin-top: 1%;

       }


       #mainDivAALeftB{

         display: flex;
         align-items: center;
         justify-content: center;
         height: 60%;
         width: 50%;
       
       }


       #mainDivAALeftBA{
              
          height: 50%;
          width: 80%;
          display: flex;

          justify-content: center;

          align-items: center;


       }






       #cashCollectedBottom{
       	 position: absolute;
       	 bottom: 2.5%;
       	 left: 2%;
       	 width: 100%;
       	 height: 10%;
       	 display: flex;
       	 justify-content: flex-start;
       	 align-items: center;
       	 padding-left: 5%;
       }

      




      .mainDivB{ 
      	 height: 82.5%;
         width: 100%;
         background: rgb(255,255,255,0.1);
         border-radius: 15px;
         display: flex;
         flex-direction:column;
         justify-content: flex-start;
         align-items: center;
         overflow:auto;
         
       }

       .mainDivBA{

       	height: 2.5%;
       	width: 100%;
       	display: flex;
       	flex-direction: row;
       	align-items: center;
       }

       .mainDivBAA{

       	  height: 100%;
       	  width: 50%;
       	  display: flex;
       	  align-items: center;
       	  justify-content: center;


       }

       .mainDivBAB{

       	  height: 100%;
       	  width: 50%;
       	  display: flex;
       	  align-items: center;
       	  justify-content: space-around;
       }

       .mainDivBABA{

       	  height: 80%;

       	  width: 40%;

       	  display: flex;

       	  align-items: center;

       	  justify-content: center;
       }

       .mainDivBB{       	

       	 height: 97.5%;
       	 width: 100%;
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: flex-start;
         border-radius: 10px:;


       }





      .rightInfoDiv{

         display:none;

       }



       .blockDiv{

       	 height: 10%;
       	 width: 97.5%;
       	 background: rgb(255,255,255,0.125);
       	 border-radius: 15px;
       	 margin-top:1%;
       	 display: flex;
       	 flex-direction: row;
       	 align-items: center;
       	 justify-content: space-around;

       }



      .blockDivA{

      	 height: 80%;
      	 width: 22.5%;
      	 display: flex;
      	 flex-direction: row;
      	 align-items: center;
      	 justify-content: space-around;


       }


       .cashBlock{
      	 height: 80%;
      	 width: 22.5%;
      	 display: flex;
      	 flex-direction: row;
      	 align-items: center;
      	 justify-content: center;
       }






      .blockDivAA{ 

      	 height: 80%;
      	 width: 25%;
      	 display: flex;
      	 align-items: center;
      	 justify-content: center;

      }


      .blockDivAB{ 

      	 height: 80%;
      	 width: 70%;
      	 display: flex;
      	 flex-direction: row;
      	 align-items: center;
      	 display: flex;
      	 align-items: center;
      	 justify-content: space-around;

      }


       .hashContainer{
       	   height: 80%;
           width: 22.5%;  
       	   display: flex;
       	   flex-direction: row;
           align-items: center;
       	   justify-content: flex-start;
       	   overflow: hidden;
          padding-left:15%;
       
       }


       .faceLogo{

       	 height: 60%;
       	 width: auto;

       }

       .moneyLogo{

       	 height: 90%;
       	 width: auto;
       	 margin-right: 35%;


       }

       .keyLogo{

       	 height: 85%;
       	 width: auto;
       	 margin-right: 50%;


       }


       .senderImg{

       	  height: 30%;
       	  width: auto;

       }


       .receiverImg{      	  

       	  height: 30%;
       	  width: auto;


       }


       .currencySpan{

       	  opacity: 0.5;
       }




       .cashSpan{

       	 margin-left: 2%;

       }



     #legend1{
            background: purple;   
            opacity: 0.7;
       }

      #legend2{

             background: green;              
             opacity: 0.7;

       }

    #legend3{             

        background: red;               
        opacity: 0.7;



        
       }

    #legend4{        

          background: yellow;             
          opacity: 0.7;
  

       }



       #leftDivContainer{
 
          height:60%;
           width:80%;
          display: flex;
          flex-direction: column;
         align-items: center;

       }



       #titleContainer{

        height: 20%;
        width: 80%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: flex-start;
        font-size: 0.7vw;

       }


       #titleContainerA{

        height: 40%;
        width: 80%;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;

       }



       #titleContainerB{

        height: 20%;
        width: 80%;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;

       }





  #blockForm{

   position: absolute;

   top: 20vh;

   left: 20vw;

   height:30vh;

   width:30vw;

   opacity:0;
   
  }



   



     @media only screen and (min-width: 800px){


     	body{     	        	

     		font-size: 0.7vw;



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


         #mainDivAALeft{
           display: flex;
           flex-direction: row;
           align-items: center;
           width: 47.5%;
       }


       #mainDivAARight{
         width: 47.5%;
         display: flex;
         flex-direction: column;
         justify-content: flex-start;
         align-items: center;

       }

        
        #mainDivAARightA{




        }




         .rightInfoDiv{
           position: fixed;
           display: flex;
           flex-direction: column;
           align-items: center;
           top: 5%;
           right:2.5%;
           width: 27.5%;
           height: 90%;
           background: rgb(255,255,255,0.1);
           border-radius:10px;
         }

        .rightInfoDivA{

          height: 60%;
          width: 80%;
          display: flex;
          justify-content: center;
          align-items: center;
          margin-right: 2%;
          position:relative;
        }

        .rightInfoDivAlegend{

          height: 5%;
          width: 90%;
          position: absolute;
          bottom: 2%;
          left:7.5%;
          display:flex;
          justify-content: center;
          align-items: center;
        }

     
        .rightInfoDivB{

          height: 40%;
          width: 100%;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: space-around;

        }


        .rightInfoDivBA{

           height:80%;
           width:90%;
           background: rgb(255,255,255,0.04);
           border-radius: 15px;
           display: flex;
           flex-direction: column;
           justify-content: space-around;
           align-items: center;

        }

        .rightInfoDivBIntro{

          height:10%;
          width: 90%;
          display: flex;
          justify-content: flex-start;
          align-items: flex-end;
          font-size: 0.8vw;
          padding-left:2.5%;
        }

        .rightInfoDivBAA{

          height: 20%;
          width: 75%;
          background: rgb(255,255,255,0.025);
          border-radius: 5px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          font-size: 0.8vw;
          padding-right: 10%;
          padding-left:5%;
        }






        .mainDiv{

        	top: 5%;
        	width:60%;
        	left:7.5%;
       
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

  




<div class='mobileLogoDiv'>
    
    	<img id='mobileLogoDivImg' src='img/smart.png'>

</div>



<div class='mainDiv'>

	<div class='mainDivA'>
		<div class='mainDivAA' id='mainDivAALeft'>
			<div id='mainDivAALeftA'>
    

        <div id='titleContainer'>
             <div class='titleContainerA'>name: <?php echo $blockChainName?></div>
             <div class='titleContainerB'>creation date: <?php echo date("d/m/Y") ?></div>
        </div>
       
      <div id='leftDivContainer'>          

         <div id='mainDivAALeftABottom'>

              <div class='mainDivAALeftABottomA' >
                   <div class='mainDivAALeftABottomAA' id='legend1'></div>
                   <div class='mainDivAALeftABottomAB'>avg. cash spent</div>
              </div>
           <div class='mainDivAALeftABottomA' >
                   <div class='mainDivAALeftABottomAA' id='legend2'></div>
                   <div class='mainDivAALeftABottomAB'>smallest block</div>
              </div>            
            <div class='mainDivAALeftABottomA' >
                   <div class='mainDivAALeftABottomAA' id='legend3'></div>
                   <div class='mainDivAALeftABottomAB'>highest block</div>
              </div>           

            <div class='mainDivAALeftABottomA' >
                   <div class='mainDivAALeftABottomAA' id='legend4'></div>
                   <div class='mainDivAALeftABottomAB'>avg. cash flow</div>
              </div>

           </div>

       



     </div>





			
			</div>
			<div id='mainDivAALeftB'>
				<div id='mainDivAALeftBA'>                           

               <canvas height='75' width='100' id='boardGraph1'></canvas>

				</div>
			
			</div>
		</div>


		<div class='mainDivAA'  id='mainDivAARight'>

         <div id='mainDivAARightA'>

             <div id='mainDivAARightAA'>
                  <div class='mainDivAARightAAA'>
                    <input id='styled_offererInput' class='blockInput' placeholder="sender" type="text">

                  </div>
                  <div class='mainDivAARightAAA'>
                     <input id='styled_receiverInput' class='blockInput' placeholder="receiver" type="text">

                  </div>
             </div>
             <div id='mainDivAARightAB'>
                <input id='styled_cashInput' class='blockInput' placeholder="EUR" type="text">
             </div>
             
             <div id='mainDivAARightAC'>
                    <div id='mainDivAARightACA'>
                          <input id='styled_messageInput' class='blockInput' placeholder="Message(optional)" type="text">
                   </div>
             </div>

         </div>


         <div id='mainDivAARightB'>

            <div id='errorDiv'>Please, fill all mandatory inputs</div>

              <div id='mainDivAARightBA'>
              

              <button id='createBtn' onclick='addBlock()'></button>
                +
              </div>
           

         </div>

    </div>


	</div>

	<div class='mainDivB'>
		
		<div class='mainDivBA'>
			<div class='mainDivBAA'>
				<img class='faceLogo' src='img/face.png'>
			</div>
			<div class='mainDivBAB'>
				<div class='mainDivBABA'>
					<img class='moneyLogo' src='img/money.png'>
				</div>
				<div class='mainDivBABA'>
					<img class='keyLogo' src='img/key.png'>	
				</div>
			</div>

		</div>
		<div class='mainDivBB'>

      <?php
      

  
  


   foreach($blocks as $block){


         
    echo "<div class='blockDiv'>
       <div class='blockDivA'>
       
          <div class='blockDivAA'>
             <img src='img/offerer.png' class='senderImg'>
          </div>
          <div class='blockDivAB'>"

          .  $block["offerer"] .

          "</div>
       </div>

       <div class='blockDivA'>
       
          <div class='blockDivAA'>
              <img src='img/receiver.png' class='receiverImg'>
          </div>
          <div class='blockDivAB'>"
             . $block["receiver"] .

          "</div>
       </div>
         <div class='cashContainer'>
              <span class='currencySpan'>EUR</span> <span class='cashSpan'>" .  $block["value"] . "</span> 
       </div>
         <div class='hashContainer'>" .  $block["hash"] . "
        
       </div>

    </div>";


   } 




         ?>


		</div>

	</div>

</div>



<div class='rightInfoDiv'>

    <div class='rightInfoDivA'>
          <canvas height='100' width='100' id='boardGraph2'></canvas>

          <div class='rightInfoDivAlegend'>Last blocks inserted</div>

    </div>    

    <div class='rightInfoDivB'>


         <div class='rightInfoDivBIntro'>
            last block detail :
         </div>

          <div class='rightInfoDivBA'>

              <div class='rightInfoDivBAA'>
                   <div class='rightInfoDivBAAA'>block sender: Michael</div>
                   <div class='rightInfoDivBAAA'></div>
              </div>

              <div class='rightInfoDivBAA'>
                   <div class='rightInfoDivBAAA'>block receiver: Ludovic</div>
                   <div class='rightInfoDivBAAA'></div>
              </div>
   
              <div class='rightInfoDivBAA'>
                   <div class='rightInfoDivBAAA'>Amount: 150 USD</div>
                   <div class='rightInfoDivBAAA'></div>
              </div>
              <div class='rightInfoDivBAA'>
                   <div class='rightInfoDivBAAA'>Message: Crypto adjustement last july 2019</div>
                   <div class='rightInfoDivBAAA'></div>
              </div>
   
   
            
          </div>
      

    </div>

</div>



<script>
  

  function boardGraph1(){

     
    let context = document.getElementById('boardGraph1').getContext('2d');

     
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'bar',
        
         // The data for our dataset
         data: {
            labels: ['', '', '', ''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.35)", "rgb(255,0,0,0.35)",  "rgb(0,255,0,0.35)", "rgb(255,0,255,0.35)"],
                borderColor: 'rgb(255,0,0)',
                data: [15,15,20,40,1]
            }]
        },
        
        // Configuration options go here
        options: {
           legend: {
            display: false
        },

          plugins: {
            datalabels: {
              display: false,
            }
        },
    scales: {
        xAxes: [{
            gridLines: {
                drawOnChartArea: false
            },

            ticks:{
              display: false
            }
        }],
        yAxes: [{
            gridLines: {
                drawOnChartArea: false
            }
        }]
    }
}, 

        }
   );
        




  }


    function boardGraph2(){

     
    let context = document.getElementById('boardGraph2').getContext('2d');

     
    let chart = new Chart(context, {

        // The type of chart we want to create
        
        type: 'line',
        
         // The data for our dataset
         data: {
            labels: ['', '','',''],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: ["rgb(0,0,255,0.35)", "rgb(255,0,0,0.35)",  "rgb(0,255,0,0.35)", "rgb(255,0,255,0.35)"],
                borderColor: 'rgb(255,0,0)',
                data: [0,30,40,70]
            }]
        },
        
        // Configuration options go here
        options: {
           legend: {
            display: false
        },

          plugins: {
            datalabels: {
              display: false,
            }
        },
    scales: {
        xAxes: [{
            gridLines: {
                drawOnChartArea: false
            },

            ticks:{
              display: false
            }
        }],
        yAxes: [{
            gridLines: {
                drawOnChartArea: false
            }
        }]
    }
}, 

        }
   );
        




  }


 

 window.onload = function(){

    boardGraph1();
    boardGraph2();

 }





 function addBlock(){

        //if no input is empty


           
          document.getElementById("offererInput").value = document.getElementById("styled_offererInput").value ;
          document.getElementById("receiverInput").value = document.getElementById("styled_receiverInput").value ;
          document.getElementById("cashInput").value = document.getElementById("styled_cashInput").value ;
          document.getElementById("messageInput").value = document.getElementById("styled_messageInput").value;



          //submit the form


          document.getElementById('blockForm').submit();
 



 }





</script>















      <form id='blockForm' action="" method="get">

         <input id="offererInput" type="text" name='offerer' placeholder = "offreur">
         <input id="receiverInput" type="text" name='receiver' placeholder = "receveur">
         <input id="cashInput" type="text" name='value' placeholder = "valeur de la transaction">
         <input id="messageInput" type="text" name='message' placeholder = "intitulé (optionnel)">
         <input type="hidden" name='blockChainName' value = '<?php echo $blockChainName?>'>
          
          </br> </br>

         <input type="hidden" name='newBlock' value="ajouter un nouveau block">
         
      </form>



