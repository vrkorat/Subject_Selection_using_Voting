<?php
session_start();
include "connection.php"; 
if(isset($_POST['login'])) {
$username = $_POST["username"];
$password = $_POST["password"];
$username = addslashes($username);
$password = addslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);
        
$sql = mysqli_query($con, 'SELECT * FROM loginusers WHERE username="'.$_POST['username'].'"  AND password="'.($_POST['password']).'" AND status="ACTIVE" ' );
if (mysqli_num_rows($sql) >0 ) {
	$member =  mysqli_fetch_assoc($sql);
	$_SESSION['SESS_NAME'] = $member['username'];
	$_SESSION['SESS_RANK'] = $member['rank'];
	$_SESSION['SEM']=$member['semester'];
	if($member['rank']=='administrator'){
			header("location: admin.php");
	}
        else if($member['rank']=='voter'){
                            if($member['semester']== 1)
                                  header("location: voter1.php");
                            if($member['semester']== 2)
                                  header("location: voter2.php");
                            if($member['semester']== 3)
                                  header("location: voter3.php");
                            if($member['semester']== 4)
                                  header("location: voter4.php");
                            if($member['semester']== 5)
			          header("location: voter5.php");
                            if($member['semester']== 6)
                                  header("location: voter6.php");
	}
}
else {
	$error = "<center><h4><font color='#FF0000'>Incorrect Username or Password</h4></center></font>";
	include "login.php";
}
}
else {
	$error = "<center><h4><font color='#FF0000'>Invalid Username or Password</h4></center></font>";
	include "login.php";
}
?>