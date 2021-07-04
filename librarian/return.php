<?php
include "connection.php";
$id=$_GET["id"];
$date=date("d-m-y");
mysqli_query($link,"update issue_books set book_return_date='$date' where id=$id");

?>
<script type="text/javascript">
	window.location="return_book.php";
</script>