<!DOCTYPE html> 
<html> 
      
<head> 
    <title> PHP TIRANDO O PO </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:blue;"> 
        BIN 2 DEC 
    </h1> 
      
    <h4> 
        CONVERT FROM BIN 2 DECIMAL
    </h4>      

  
    <form method="post"> 
        <input type="text" name="valor" id="valor"/>

        <input type="submit" name="button1"
                class="button" value="Convert this" /><br><br>
    </form> 
</head> 
<?php
        if(array_key_exists('button1', $_POST)) {
            convert(); 
        }

        function convert() { 
            echo bindec($_REQUEST['valor']); 
        } 
    ?> 
  
</html> 