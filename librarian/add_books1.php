        <?php 
        session_start();
        include "header.php";
        include "connection.php";
        ?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Add Books</h3>
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
                                <h2>Add Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="booksname" placeholder="Books name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Books Image
                                                <input type="file"  name="file1" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="author" placeholder="Author name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="publisher" placeholder="Publisher">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="purchase_date" placeholder="Purchase Date">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="price" placeholder="Books Price">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="qty" placeholder="Quantity">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="available_qty" placeholder="Availabe Quantity">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="submit" class="btn btn-default" name="submit1" value="Add Book" style="background-color: blue; color: white;">
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <?php
        if(isset($_POST['submit1'])){
            $tm=md5(time());
            $fnm=$_FILES["file1"]["name"];
            $dst="./books_image/".$tm.$fnm;
            $dst1="books_image".$tm.$fnm;
            move_uploaded_file($_FILES["file1"]["books_image"], $dst);
            $booksname=$_POST['booksname'];
            $author=$_POST['author'];
            $publisher=$_POST['publisher'];
            $purchase_date=$_POST['purchase_date'];
            $price=$_POST['price'];
            $qty=$_POST['qty'];
            $available_qty=$_POST['available_qty'];
            $query="INSERT INTO `books`( `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `available_qty`, `librarian_username`) VALUES ('$booksname','$dst1','$author','$publisher','$purchase_date','$price','$qty','$available_qty','$_SESSION[librarian]')";
            mysqli_query($link,$query);
            ?>
           <div class="alert alert-success col-lg-6 col-lg-push-3">
       Book Added successfully!...
    </div>

           <?php

        }
        ?>
        <?php
        include "footer.php";
        ?>

