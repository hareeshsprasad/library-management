<?php
session_start();
if(!isset($_SESSION["librarian"])){
	?>
	<script type="text/javascript">
	   window.location="login.php";
   </script>
	<?php
	   
   }
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"update student_registration set status='yes' where id=$id");

?>
<script type="text/javascript">
	window.location="student_detail.php";
</script>