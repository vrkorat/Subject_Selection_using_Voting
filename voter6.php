<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
    echo "<center><font size='6'> You are student of semester".'$_SESSION['SEM']'."<br>"
<center><font size='6'> Select Your Favourite Subject...<BR>
<input type="radio" name="lan" value="TAFL">TAFL<BR>

</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
