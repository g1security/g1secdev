
<?php 
session_start(); 
include "global_variables_for_db.php";

if($_SESSION['username']==null){
    ?><script>
  alert("Login first!");
  window.location.replace("loginform.php");
</script>
<?php
}

?>

<?php
$countRFID = "SELECT * FROM users";
$countresult = mysqli_query($conn, $countRFID);
$numrfid = mysqli_num_rows($countresult);

echo $numrfid
?>