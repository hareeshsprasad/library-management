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
                                <form action="" name="search_book" method="post">
                                 <input type="text" name="bookname">
                                 <input type="submit" name="findbook" value="Find">
                                </form>
                            </div>
                            <?php
                                if(isset($_POST['findbook'])){
                                   $bookname=$_POST['bookname'];
                                   $sql=" SELECT * FROM issue_books WHERE books_name like '%".$bookname."%'";
                                   $res=mysqli_query($link,$sql);                                   
                                    echo"<table class='table table-bordered'>";
                                    echo"<tr>";
                                    echo"<th>";echo "Book Name"; echo"</th>";
                                    echo"<th>";echo "Enrollment Number"; echo"</th>";
                                    echo"<th>";echo "Name"; echo"</th>";                                   
                                    echo"<th>";echo "Semester"; echo"</th>";                                    
                                    echo"<th>";echo "Contact"; echo"</th>";   
                                    echo"<th>";echo "Email"; echo"</th>"; 
                                    echo"<th>";echo "Issue Date"; echo"</th>";                                  
                                    echo"</tr>";
                                    while($row=mysqli_fetch_array($res)){
                                    echo"<tr>";
                                    echo"<td>";echo $row["books_name"]; echo"</td>";
                                    echo"<td>";echo $row["student_enrollment"]; echo"</td>";
                                    echo"<td>";echo $row["student_name"];echo"</td>";                                  
                                    echo"<td>";echo $row["student_sem"]; echo"</td>";                                   
                                    echo"<td>";echo $row["student_contact"];echo"</td>"; 
                                    echo"<td>";echo $row["student_email"];echo"</td>";    
                                    echo"<td>";echo $row["books_issue_date"];echo"</td>";                                       
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
        <!-- /page content -->
        <?php
        include "footer.php";
        ?>

