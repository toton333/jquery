<?php
require 'localcore.inc.php';
require 'localconnect.inc.php';

  if(loggedin()){
  
   getuserfields('firstname').'<br/>';  /*here getuserfields are in use , so the parameter of it not a variable anymore      
                                             that is the reason we write 'firstname' instead of firstname , cause firstname is
											not a variable*/
   
   
?> 
   you are logged in .<br/> <a href="locallogout.php">logout</a>
   <p><input id="setting" type="button" value="Account Setting" /></p> 
<?php	   }else{
  
        header('Location: localloginform.php');
  
  
            }


?>