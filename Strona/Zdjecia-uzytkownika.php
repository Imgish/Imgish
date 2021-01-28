
<html>
 <link rel="stylesheet" href="css/PicUpload.css">      
 <body>
    <form action="wgrywanie.php" method="POST" ENCTYPE="multipart/form-data">
        
    <div class="PicUploadSpace">
        
    <div class="PicChose">
        <input type="file" name="plik" class="PicSelect"/><br/>
   </div>
        
    <div class="PicSubmission">
        <input type="text" name="nazwapliku" class="PicName">
        <input type="submit" value="Wyślij"/ class="PicSubmit">
    </div>
    
   </div>

  </form>
 </body>
</html>


<?php
$dataDoda=date('Y-m-d H:i:s');
echo "$dataDoda";

?>








