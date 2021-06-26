        <?php 
        session_start();
        include "header.php";
        include "connection.php";
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title></title>
        </head>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        </head>
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
                                <form name="form1" action="" method="post" class="col-lg-6"> 
            <table class="table table-bordered">
                <tr>
                    <td>
                        <input type="text" class="form-control" name="booksname" placeholder="Books name" pattern=".*\S+.*" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="author" placeholder="Author" pattern=".*\S+.*" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="publisher" placeholder="Publisher" pattern=".*\S+.*" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="purchase_date" placeholder="Purchase Date" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="price" placeholder="Books Price" pattern="[0-9]+" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="qty" placeholder="Books Quantity" pattern="[0-9]+" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="availabe_qty" placeholder="Available Quantity" pattern="[0-9]+" required>
                    </td>
                </tr>
                <tr>
                     <td>
                        <input type="submit" class="btn btn-default" name="submit1" value="Add Book" style="background-color: blue; color: white;">
                       </td>
                </tr>
            </table>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        </form>
        <?php
        if(isset($_POST['submit1'])){
            $name=$_POST['booksname'];
            // echo $name;
            $author=$_POST['author'];
            // echo $author;
            $publisher=$_POST['publisher'];
            $purchase_date=$_POST['purchase_date'];
            // echo $publisher;
            $price=$_POST['price'];
            // echo $price;
            $qty=$_POST['qty'];
            // echo $qty;
            $availabe_qty=$_POST['availabe_qty']; 
            // echo $_SESSION[librarian];
            $query="INSERT INTO `books`( `books_name`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `available_qty`, `librarian_username`) VALUES('$name','$author','$publisher','$purchase_date','$price','$qty','$availabe_qty','$_SESSION[librarian]')";
            // print_r($query);
            mysqli_query($link,$query);

            
        }

        ?>
        <?php
        include "footer.php";
        ?>

</html>