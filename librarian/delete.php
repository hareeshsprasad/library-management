<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"Delete from books where id=$id");

?>
<script type="text/javascript">
	window.location="view_books.php";
</script>