
<html>
 <link rel="stylesheet" href="css/PicUpload.css">      
 <body>
<form action="wgrywanie.php" method="POST" ENCTYPE="multipart/form-data"> 
    <div class="body_dropzone">
        <div class="PicChose">
<script>
function drag_drop(event) 
 {
    event.preventDefault();
    /*alert(event.dataTransfer.files[0]);
    alert(event.dataTransfer.files[0].name);
    alert(event.dataTransfer.files[0].size+" bytes");*/
    /*  This is where to begin uploading the file with Ajax and upload progress bar to PHP script 
       https://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP */ 	   
}
</script>
<h1>File Upload Drop Zone</h1>
<div id="drop_zone" ondrop="drag_drop(event)" ondragover="return false"></div>
</div>
<!-- TO ZMIEN WYGLAD NIE MUSI NA NIM DZIALAC OPCJA DRAG AND DROP WYSTACZY PRZYCISK DRAG AND DROP BEDZIE W TYMBOXIE 
WYZEJ-->
<div class="Form">
        <input type="file" name="plik" class="PicSelect"  style="margin-bottom: 2%;"> 

        <div class="PicSubmission">
            Nazwa pliku<input type="text" name="nazwapliku" class="PicName">
            <input type="submit" value="Wyślij"/ class="PicSubmit">
        </div>
    
    </div>
    
    </div>
    </div>
 </form>
  </form>
 </body>
</html>


