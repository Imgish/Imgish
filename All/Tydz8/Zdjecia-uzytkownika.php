


<html>
 <body>
  <form action="wgrywanie.php" method="POST" ENCTYPE="multipart/form-data">
   <input type="file" name="plik"/><br/>
    <input type="text" name="nazwapliku">
   <input type="submit" value="Wyślij plik"/>

  </form>
 </body>
</html>


<?php
$dataDoda=date('Y-m-d H:i:s');
echo "$dataDoda";

?>








