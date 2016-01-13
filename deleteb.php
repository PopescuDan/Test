<?php 
  include 'include.php';
   ?> 
<?php
if(isset($_GET['id'])) {
	echo $_GET['id'];
	$sql= "DELETE FROM carti WHERE id={$_GET['id']}";
	mysqli_query($conn, $sql);
}
// functia butonului delete
header('location: http://localhost/test.php');
?>
	