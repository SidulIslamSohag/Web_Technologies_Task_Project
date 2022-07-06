<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Result</title>

</head>
<body>
<?php

$Err = $pErr = $npErr = $cpErr = $h = "";
$p = $np =$cp = "";
$name =""; 
session_start();
if(isset( $_SESSION['uname'])){
	$name = $_SESSION['uname'];
}
if(empty($name)){
	header("location:LoginPage.php");
}
if(isset ($_POST['Submit'])){
	$p = $_POST['pass'];
	$np = $_POST['npass'];
	$cp = $_POST['cpass'];

if(empty($p) || empty($np) || empty($cp)){
		$Err = "Please fill up all the informations!";
	}
	else{ 
		if(!preg_match(	"/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $np)){
		$npErr =" Minimum eight characters, at least one letter, one number and one special character!";
	     }
	     else{  
		    $cu = "jb";
            $info = file_get_contents("data.json");
            $info = json_decode($info);
            foreach ($info as $Info) {
              $un = $Info->User_Name;
              $pn = $Info->Password;
              if($un==$name && $pn==$p){
               $cu = "";
              }
            }
		if(!empty($cu)){
          $pErr ="Password doesn't match with the current password!";
		}
		else{
	    if(!strcmp($p, $np)){
          $npErr = "New Password should not be same as the Current Password!";
	     }
	     else{
	    if(strcmp($np, $cp))
	     {
	     	$cpErr = "New Password must match with the Retyped Password!";
	      }
	      else{
	       require("user.class.php");
           $user = new User('data.json');
           $user->updateUser($name,'Password',$np);
           $h = "Password is changed.";
	      }
	  }
	   }  
	 }
	}
}
?>

<div class="full-page">
            <?php include'header.php';?>
        <div style="border: 2px solid blue; width: 25%; height: 300px;margin-top: 10px; color: blue; font-size: 30px; float: left">
                    <ul>
                        <li ><a href='Notices.php' style= "color:blue;">Notices </a></li>
                        <li ><a href='ProfilePage.php' style= "color:blue;">Student Profile  </a></li>
                        <li ><a href='Routine.php' style= "color:blue;">Routine  </a></li>
                        <li ><a href='Homework.php' style= "color:blue;">Homework </a></li>
                        <li ><a href='Result.php' style= "color:blue;">Result  </a></li>
                        <li ><a href='LogOut.php' style= "color:blue;">Logout </a></li>
                    </ul>        	
</div>
        <div style="border: 1px solid blue; width: 54%; height: 400px;margin-top: 10px;color: blue; font-size: 25px; float: left; padding-left: 10px">    
     <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<fieldset>
        <legend> <h3 class="main-heading">Result</h3> </legend>
      		Subjects	Math	English	Bangla	Science	Physics<br>
             Result	     99	      78	   82	   89	  80

    </fieldset>
    <h3><?php echo $h ?></h3>
    </form> 
</div>
 </div>
<?php include'footer.php';?> 
</body>
</html>