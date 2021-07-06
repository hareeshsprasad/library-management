<?php
session_start();
include "connection.php";
$id=$_GET["id"];
$date=date("d-m-y");
mysqli_query($link,"update issue_books set book_return_date='$date' where id=$id");
$book_name="";
mysqli_query($link,"Delete from issue_books where id=$id");
$res=mysqli_query($link,"select * from books where id=$id");
while($row=mysqli_fetch_array($res)){
	$book_name=$row['books_name'];
}
$updateQuery="update books set available_qty=available_qty+1 where books_name= '$book_name'";
mysqli_query($link,$updateQuery);
?>
<script type="text/javascript">
	window.location="return_book.php";
</script>