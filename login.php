<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
        if($_SESSION['SEM'] == 1)
            header("location: voter1.php");
        else if($_SESSION['SEM'] == 2)
            header("location: voter2.php");
        else if($_SESSION['SEM'] == 3)
            header("location: voter3.php");
        else if($_SESSION['SEM'] == 4)
            header("location: voter4.php");
        else if($_SESSION['SEM'] == 5)
            header("location: voter5.php");
        else if($_SESSION['SEM'] == 6)
            header("location: voter6.php");
}
?>
<br>
<center>
<legend> <h3>  Login for Select Favourite Subject </h3></legend> 
<br>
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="4" >
<form action="login_action.php" method="post" id="myform" >
Username : 
<input type="text" name="username" value="" > 
<br>
<br>
Password : 
<input type="password" name="password" value="" >
<br>
<br>
<input type="submit" name="login" value="login" > 
</form></font>
</center>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>
