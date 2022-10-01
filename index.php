<?php 
   setCookie("test_cookie", "test", time() + 3600, '/')
?>
<?php
   if(count($_COOKIE) > 0){
     echo "Cookies are Enabled!";
   }else{
      echo "Enable Cookies!";
  }
?>
