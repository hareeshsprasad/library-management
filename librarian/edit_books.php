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
        include "header.php";
        ?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               <?php
                               $id=$_GET["id"];
                               $res=mysqli_query($link,"select * from books where id=$id");
                               while($row=mysqli_fetch_array($res)){
                                   $book_name=$row['books_name'];
                                   $author=$row['books_author_name'];                                 
                                   $books_publication_name=$row['books_publication_name'];
                                   $books_purchase_date=$row['books_purchase_date'];
                                   $books_price=$row['books_price'];
                                   $books_qty=$row['books_qty'];
                                   $available_qty=$row['available_qty'];
                               }
                               
                               ?>
                                  <form name="form1" action="" method="post" class="col-lg-6"> 
            <table class="table table-bordered">
                <tr>
                    <td>
                        <input type="text" class="form-control" name="booksname" placeholder="Books name" pattern=".*\S+.*" value=<?php echo "$book_name";?>  required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="author" placeholder="Author" pattern=".*\S+.*" value=<?php echo "$author";?> required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="publisher" placeholder="Publisher" pattern=".*\S+.*" value=<?php echo "$books_publication_name";?> required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="date" class="disableFuturedate form-control" name="purchase_date" placeholder="Purchase Date" value=<?php echo "$books_purchase_date";?> required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="price" placeholder="Books Price" pattern="[0-9]+" value=<?php echo "$books_price";?> required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="qty" placeholder="Books Quantity" pattern="[0-9]+" value=<?php echo "$books_qty";?> required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="availabe_qty" placeholder="Available Quantity" pattern="[0-9]+" value=<?php echo "$available_qty";?> required>
                    </td>
                </tr>
                <tr>
                     <td>
                        <input type="submit" class="btn btn-default" name="submit1" value="update" style="background-color: blue; color: white;">
                       </td>
                </tr>
            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <?php
        if(isset($_POST['submit1'])){
            $name=$_POST['booksname'];          
            $author=$_POST['author'];            
            $publisher=$_POST['publisher'];
            $purchase_date=$_POST['purchase_date'];           
            $price=$_POST['price'];            
            $qty=$_POST['qty'];           
            $availabe_qty=$_POST['availabe_qty'];             
            mysqli_query($link,"update books set books_name='$name', books_author_name='$author',books_publication_name='$publisher',
            books_purchase_date='$purchase_date',books_price='$price',books_qty='$qty',available_qty='$availabe_qty',librarian_username='$_SESSION[librarian]' where id=$id");
            mysqli_query($link,$query);
            

            
        }

        ?>
        <!-- <script type="text/javascript">
	    window.location="view_books.php";
        </script> -->
        <!-- /page content -->
        <?php
        include "footer.php";
        ?>

