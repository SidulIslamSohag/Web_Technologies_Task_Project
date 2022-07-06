<!DOCTYPE html>
<html>
<head>
<style>
 {
  box-sizing: border-box;
}

.row {
  display: flex;
}


.column {
  flex: 50%;
  padding: 10px;
  height: 10%;
}
</style>
</head>
<body>

<div class="row">
  <div class="column" >
     <img src="photos/school.jpg" alt="LOGO" height="200px">
  </div>
   <div style="border: 1px solid wblue; width: 54%; height: 50px;margin-top: 10px;color: blue; font-size: 50px; float: left; padding-left: 10px"> 
    School Management System
   </div>
<span style = "display:inline-block; width:100%; height:10%; text-align:right">

  <div class="column" >

<?php

if (isset($_SESSION['uname'])) {
  echo " Logged in as ";
  echo '<a href="ProfilePage.php">';
  echo $_SESSION["uname"];
  echo '</a> |';
  echo "<a href='logout.php'>Logout</a>";

}
else{
  echo '<a href="PublicHome.php">Home</a> |
  <a href="LoginPage.php">Login</a> |
  <a href="RegistrationPage.php">Registration</a> ';   
  }
?>
  </div>
</span>
</div>
<hr>
</body>
</html>