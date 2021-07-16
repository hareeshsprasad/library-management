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
mysqli_query($link,"Delete from books where id=$id");

?>
<script type="text/javascript">
	window.location="view_books.php";
</script>