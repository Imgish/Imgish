<?php
session_start();
?>
<html>
<link rel="stylesheet" href="css/PicUpload.css">      
<body>
<form action="wgrywanie.php" method="POST" ENCTYPE="multipart/form-data"> 
    <div class="body_dropzone">
        <div class="PicChose">

<h1>Dodaj zdjęcie na serwer</h1>
    <div class="Form">
    <p class="RejError">
    <?php  
        if (isset($_SESSION['e_zdjęcie'])) 
        {
        echo $_SESSION['e_zdjęcie'];
        }
    ?></p>
        <input type="file" name="plik" class="PicSelect"  style="margin-bottom: 2%;"> 

        <div class="PicSubmission">
            Nazwa pliku<input type="text" name="nazwapliku" class="PicName">
            <input type="submit" value="Wyślij"/ class="PicSubmit">
        </div>
    
    </div>
    
        </div>
    </div>
</form>
</body>
</html>
