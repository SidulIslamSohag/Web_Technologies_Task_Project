<?php
$name =""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
	header("location:LoginPage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Notice</title>

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
        <div style="border: 1px solid wblue; width: 54%; height: 200px;margin-top: 10px;color: blue; font-size: 30px; float: left; padding-left: 10px">    
     <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h3 class="main-heading">Notice</h3> </legend> 
      2022-07-04|CSE Set B Exam- Course - OOAD<br>

     2022-06-22|BBA Conference- Location: D Building Auditorium<br>

     2022-06-14|ACL 2022 Football-Tuesday, 14 June (AIUB Spots Complex)
    </fieldset>
    </form> 
</div>
 </div>
<?php include 'footer.php'; ?>           
</body>
</html>