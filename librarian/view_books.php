        <?php 
        include "header.php";
        include "connection.php";
        ?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <!-- <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>
                    
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default"  type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div> -->
             
                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                    <form name="f1" class="form-control" action="" method="post">
                        <input type="text" name="search">
                        <input type="button" name="submit1" value="search">
                    </form>            
                            </div>


                                <?php
                                if(isset($_POST["submit1"])){
                                // die('hi');
                                $search=$_POST['search'];
                                $res=mysqli_query($link,"select * from books where books_name like'%$search%'");
                                echo"<table class='table table-bordered'>";
                                echo"<tr>";
                                echo"<th>";echo "Book Name"; echo"</th>";
                                echo"<th>";echo "Author"; echo"</th>";
                                echo"<th>";echo "Publisher"; echo"</th>";
                                echo"<th>";echo "Purchase Date"; echo"</th>";
                                echo"<th>";echo "Price"; echo"</th>";
                                echo"<th>";echo "Quantity"; echo"</th>";
                                echo"<th>";echo "Availabe Quantity"; echo"<t/h>";
                                // echo"<th>";echo "Status"; echo"</th>";
                                echo"<th>";echo "Edit"; echo"</th>";
                                echo"<th>";echo "Delete"; echo"</th>";
                                echo"</tr>";
                                while($row=mysqli_fetch_array($res)){
                                echo"<tr>";
                                echo"<td>";echo $row["books_name"]; echo"</td>";
                                echo"<td>";echo $row["books_author_name"]; echo"</td>";
                                echo"<td>";echo $row["  books_publication_name"];echo"</td>";
                                echo"<td>";echo $row["books_purchase_date"]; echo"</td>";
                                echo"<td>";echo $row["books_price"]; echo"</td>";
                                echo"<td>";echo $row["books_qty"]; echo"</td>";
                                echo"<td>";echo $row["available_qty"];echo"</td>";
                                // echo"<td>";echo $row["status"]; echo"</td>";
                                echo"<td>";?><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a> <?php echo"</td>";
                                echo"<td>";?><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a> <?php echo"</td>";
                                echo"</tr>";
                                 }
                                 echo"</table>";
                                }
                                else{
                                $res=mysqli_query($link,"select * from books");
                                echo"<table class='table table-bordered'>";
                                echo"<tr>";
                                echo"<th>";echo "Book Name"; echo"</th>";
                                echo"<th>";echo "Author"; echo"</th>";
                                echo"<th>";echo "Publisher"; echo"</th>";
                                echo"<th>";echo "Purchase Date"; echo"</th>";
                                echo"<th>";echo "Price"; echo"</th>";
                                echo"<th>";echo "Quantity"; echo"</th>";
                                echo"<th>";echo "Availabe Quantity"; echo"<t/h>";
                                // echo"<th>";echo "Status"; echo"</th>";
                                echo"<th>";echo "Edit"; echo"</th>";
                                echo"<th>";echo "Delete"; echo"</th>";
                                echo"</tr>";
                                while($row=mysqli_fetch_array($res)){
                                echo"<tr>";
                                echo"<td>";echo $row["books_name"]; echo"</td>";
                                echo"<td>";echo $row["books_author_name"]; echo"</td>";
                                echo"<td>";echo $row["books_publication_name"];echo"</td>";
                                echo"<td>";echo $row["books_purchase_date"]; echo"</td>";
                                echo"<td>";echo $row["books_price"]; echo"</td>";
                                echo"<td>";echo $row["books_qty"]; echo"</td>";
                                echo"<td>";echo $row["available_qty"];echo"</td>";
                                // echo"<td>";echo $row["status"]; echo"</td>";
                                echo"<td>";?><a href="edit_books.php?id=<?php echo $row["id"];?>">Edit</a> <?php echo"</td>";
                                echo"<td>";?><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a> <?php echo"</td>";
                                echo"</tr>";
                                 }
                                 echo"</table>";
                             }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <?php
        include "footer.php";
        ?>

