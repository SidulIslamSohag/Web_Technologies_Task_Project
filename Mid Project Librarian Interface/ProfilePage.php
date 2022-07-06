<?php
$name = $n = $e = $g = $db =$im = ""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
    header("location:LoginPage.php");
}

            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
            if($un==$name){
               $n = $Info->Name;
               $e = $Info->Email ;
               $g = $Info->Gender ;
               $db =$Info->Date_of_Birth ;
               $im = $Info->Image ;

              }
            }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Profile</title>


</head>
<body >
    <div class="full-page">
            <?php include 'header.php'; ?>

        <div style="border: 2px solid blue; width: 25%; height: 300px;margin-top: 10px; color: blue; font-size: 30px; float: left">
                    <ul>
                        <li ><a href='Notices.php' style= "color:blue;">Notices </a></li>
                        <li ><a href='ProfilePage.php' style= "color:blue;">Librarian Profile  </a></li>
                        <li ><a href='Routine.php' style= "color:blue;">Routine  </a></li>
                        <li ><a href='LogOut.php' style= "color:blue;">Logout </a></li>
                    </ul>        	
</div>
        <div style="border: 5px solid wblue; width: 54%; height: 500px;margin-top: px;color: blue; font-size: 25px; float: left; padding-left: 10px">
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h2 class="main-heading">Profile</h2> </legend>
        <label for="name">Name  : <?php echo $n?> </label><br>
        <span class="underline">______________________</span><br> 
        <label for="email">Email  : <?php echo $e?> </label><br>
        <span class="underline">______________________</span><br> 
        <label for="gender">Gender  : <?php echo $g?> </label><br>
        <span class="underline">______________________</span><br>
        <label for="dob">Date of Birth  : <?php echo $db?> </label><br>
        <span class="underline">______________________</span><br><br>          
    </fieldset>
</form>
        </div>
 </div>
<?php include 'footer.php'; ?>
          
</body>
</html>