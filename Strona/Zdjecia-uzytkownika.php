
<html>
 <link rel="stylesheet" href="css/PicUpload.css">      
 <body>
<style>
#drop_zone {
    background-color: #EEE; 
    border: #999 5px dashed;
    width: 290px; 
    height: 200px;
    padding: 8px;
    font-size: 18px;
}
      
     

</style>
<form action="wgrywanie.php" method="POST" ENCTYPE="multipart/form-data">  
    <div class="PicChose">
        
        
        
        
        
<script>
function drag_drop(event) {
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
       <input type="file" name="plik" class="PicSelect"/><br/> 
  
        
    <div class="PicSubmission">
        Nazwa pliku<input type="text" name="nazwapliku" class="PicName">
        <input type="submit" value="Wyślij"/ class="PicSubmit">
    </div>
    
   </div>

  </form>
  </form>
 </body>
</html>


