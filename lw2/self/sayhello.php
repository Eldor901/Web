<?php

  if($_POST['user'])
  {print "Hello, ";
      print $_POST['user'];
      print "!";
   }else
  {
      print <<<_HTML_
<form method = "post" action = $_SERVER[PHP_SELF]>
 Your Name: <input type="text" name="user"/>
        <br/>
        <button type="submit"> Say hallo</button>
</form>
_HTML_;

  }
?>

