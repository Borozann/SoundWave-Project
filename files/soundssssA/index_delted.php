<?php include "connection_bd.php";
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SoundWave</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.css"
    />
    <link rel="stylesheet" type="text/css" href="Styles.css" />

  </head>


 
    <div class="container">
      <div id="pagepiling">
        <div class="section section1" style="text-align: center; ">
        
     

        <img style="width: 400px; height: 400px;" 
        src="img/logo.png">
      
      </div>

        <div class="section section2 overlay fundo ">
          <div class="espaco">
            
            <div>
             
                
              <div class="container123">
                <img style="width: 400px;" src="img/headphones.jpg" alt="Headphones">
                <a style="width: 402px; height: 40px; "   href="sing_up.php"     class="myButton">Visite agora a loja</a>
            </div>
              
           
            </div>
            
           
            Headphones

          </div>
        </div>

        <div class="section section3">
          <div class="espaco">
            <div style="background-color:  #ffffff; width: 400px; height: 300px;padding: 5px;  -webkit-box-shadow:0px 0px 68px 7px rgba(45,255,196,1);
            -moz-box-shadow: 0px 0px 68px 7px rgba(45,255,196,1);
            box-shadow: 0px 0px 68px 7px rgba(45,255,196,1);">
           
               <p style="color: black; font-size: 22px;">          fjisjgifjgkifg fnmgfemgikfw kbfwnibf k       Headphones</p>

             
            
            </div>
            <img style="height: 400px; width: 400px;" src="img/speaker.jpg">

          </div>
          </div>
        </div>

    
      </div>
    </div>
  <body>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.min.js"
    ></script>
    <script>
      $(document).ready(function () {
        $("#pagepiling").pagepiling();
      });
    </script>
    
  </body>
</html>


