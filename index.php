<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	
        if($_SESSION['SEM'] == 1)
        {
             header("Location: voter1.php");
        }
        if($_SESSION['SEM'] == 2)
        {
            header("Location: voter2.php");
        }
        if($_SESSION['SEM'] == 3)
        {
            header("Location: voter3.php");
        }
        if($_SESSION['SEM'] == 4)
        {
            header("Location: voter4.php");
        }
        if($_SESSION['SEM'] == 5)
        {
            header("Location: voter5.php");
        }
        if($_SESSION['SEM'] == 6)
        {
            header("Location: voter6.php");
        }
}
?>
<?php global $msg; echo $msg;?>

<p><center><legend><font color='#008000' size='18'>This system allows all registered students to vote for their favorite SUBJECT</p>
<p>In order to make a vote you have to register first and then login.</font></legend></center>
    <p>&nbsp;&nbsp;</p>
