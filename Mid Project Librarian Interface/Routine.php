<?php
$name =""; 
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

if(isset ($_POST['Submit'])){
            require("user.class.php");
            $user = new User('data.json');
            $user->updateUser($name,'Name',$_POST['name']);
            $user->updateUser($name,'Email',$_POST['email']);
            $user->updateUser($name,'Gender',$_POST['gender']);
            $user->updateUser($name,'Date_of_Birth',$_POST['dob']);
            header("location:ProfilePage.php");
}            
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Routine</title>

</head>
<body >
    <div class="full-page">
            <?php include'header.php';?> 
        <div style="border: 2px solid blue; width: 25%; height: 300px;margin-top: 10px; color: blue; font-size: 30px; float: left">
                    <ul>
                        <li ><a href='Notices.php' style= "color:blue;">Notices </a></li>
                        <li ><a href='ProfilePage.php' style= "color:blue;">Librarian Profile  </a></li>
                        <li ><a href='Routine.php' style= "color:blue;">Routine  </a></li>
                        <li ><a href='LogOut.php' style= "color:blue;">Logout </a></li>
                    </ul>          	
</div>
        <div style="border: 1px solid wblue; width: 54%; height: 400px;margin-top: 10px;color: blue; font-size: 25px+; float: left; padding-left: 10px">
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <fieldset>
        <legend> <h3 class="main-heading">Routine</h3> </legend>
     <table width="100%" height="100" border=1 cellspacing="5" bgcolor="#FFCC99">
        <!--<caption>Timetable</caption>-->
        <tr>
            <td align="center" height="50"
                width="100"><br>
                <b>Day/Period</b></br>
            </td>
            <td align="center" height="50"
                width="100">
                <b>I<br>9:30-10:20</b>
            </td>
            <td align="center" height="50"
                width="100">
                <b>II<br>10:20-11:10</b>
            </td>
            <td align="center" height="50"
                width="100">
                <b>III<br>11:10-12:00</b>
            </td>
            <td align="center" height="50"
                width="100">
                <b>12:00-12:40</b>
            </td>
            <td align="center" height="50"
                width="100">
                <b>IV<br>12:40-1:30</b>
            </td>
            <td align="center" height="50"
                width="100">
                <b>V<br>1:30-2:20</b>
            </td>
            <td align="center" height="50"
                width="100">
                <b>VI<br>2:20-3:10</b>
            </td>
            <td align="center" height="50"
                width="100">
                <b>VII<br>3:10-4:00</b>
            </td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Monday</b></td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">Che</td>
            <td rowspan="6" align="center" height="50">
                <h2>L<br>U<br>N<br>C<br>H</h2>
            </td>
            <td colspan="3" align="center"
                height="50">LAB</td>
            <td align="center" height="50">Phy</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Tuesday</b>
            </td>
            <td colspan="3" align="center"
                height="50">LAB
            </td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">SPORTS</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Wednesday</b>
            </td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">phy</td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td colspan="3" align="center"
                height="50">LIBRARY
            </td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Thursday</b>
            </td>
            <td align="center" height="50">Phy</td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td colspan="3" align="center"
                height="50">LAB
            </td>
            <td align="center" height="50">Mat</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Friday</b>
            </td>
            <td colspan="3" align="center"
                height="50">LAB
            </td>
            <td align="center" height="50">Mat</td>
            <td align="center" height="50">Che</td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Phy</td>
        </tr>
        <tr>
            <td align="center" height="50">
                <b>Saturday</b>
            </td>
            <td align="center" height="50">Eng</td>
            <td align="center" height="50">Che</td>
            <td align="center" height="50">Mat</td>
            <td colspan="3" align="center"
                height="50">SEMINAR
            </td>
            <td align="center" height="50">SPORTS</td>
        </tr>
    </table>
            </td>
        </tr>
    </table>
    </fieldset>
</form>
        </div>
 </div>
<?php include'footer.php';?>          
</body>
</html>