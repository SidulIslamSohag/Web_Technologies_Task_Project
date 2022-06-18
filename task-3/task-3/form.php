<!DOCTYPE html>
<html>
<body>

<form style=" width: 300px" action="upload.php" method="post" enctype="multipart/form-data">

<fieldset><legend><b>PROFILE PICTURE</b></legend>
  
  <img src="uploads/profile-pic.png" width="150px"><br><br>
  <input type="file" name="fileToUpload" id="fileToUpload" title= "Only (jpeg or jpg or png) Maximum size 4MB">
  <hr>
  <input type="submit" value="Upload Image" name="submit">
</fieldset>
</form>
</body>
</html>