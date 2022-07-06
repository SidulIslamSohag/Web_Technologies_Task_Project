<?php
$name = "";
$l = $im = ""; 
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
               $im = $Info->Image ;

              }
            }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HOME WORK</title>

</head>
<body >
    <div class="full-page">
            <?php include 'header.php';?>
        <div style="border: 2px solid blue; width: 25%; height: 300px;margin-top: 10px; color: blue; font-size: 30px; float: left">
                    <ul>
                        <li ><a href='Notices.php' style= "color:blue;">Notices </a></li>
                        <li ><a href='ProfilePage.php' style= "color:blue;">Student Profile  </a></li>
                        <li ><a href='Routine.php' style= "color:blue;">Routine  </a></li>
                        <li ><a href='HomeWork.php' style= "color:blue;">HomeWork </a></li>
                        <li ><a href='Result.php' style= "color:blue;">Result  </a></li>
                        <li ><a href='LogOut.php' style= "color:blue;">Logout  </a></li>
                    </ul>           
</div>
        <div style="border: 1px solid wblue; width: 54%; height: 500px;margin-top: 10px;color: blue; font-size: 25px; float: left; padding-left: 10px">
    <form method= "post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
          <fieldset>
  <legend> <h3 class="main-heading">HomeWork</h3> </legend>
  <form method="POST" action="../controller/addNoticeCheck.php">
            <table>
              <tr>
                <td>Date</td>
                <td>
                  <input type="date" name="date" value="">
                </td>
              </tr>
              <tr>
                <td>STUDENT NAME</td>
                <td><input type="text" name="title" value=""></td>
              </tr>
              <tr>
                <td>ROll</td>
                <td><input type="text" name="title" value=""></td>
              </tr>
              <tr>
                <td>TEACHER's NAME</td>
                <td><input type="text" name="title" value=""></td>
              </tr>
              <tr>
                <td>COURSE</td>
                <td><input type="text" name="details" value=""></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" name="Upload" value="Upload"></td>
              </tr>
            </table>
          </form>
        </fieldset>
        <br>
        <fieldset>
          <legend>Upload PDF/IMG</legend>
          <form method="POST" action="../controller/fileUploadCheck.php" enctype="multipart/form-data">
            File: <input type="file" name="myfile">   
            <input type="submit" name="submit" value="Upload">
          </form>
</fieldset>
</form>

        </div>
 </div>
<?php include 'footer.php';?>       
</body>
</html>
