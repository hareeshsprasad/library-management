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
                                
                                    <?php
                                    // $username=$_SESSION['username'];
                                   
                                    $res=mysqli_query($link,"select * from messages where student_username='$_SESSION[username]'");
                                    // print_r($res);
                                    echo"<table class='table table-bordered'>";
                                    echo"<tr>";
                                    echo"<th>";echo "Firstname"; echo"</th>";
                                    echo"<th>";echo "Lastname"; echo"</th>";
                                    while($row=mysqli_fetch_array($res)){
                                    echo"<tr>";
                                    echo"<td>";echo $row["title"]; echo"</td>";
                                    echo"<td>";echo $row["message"]; echo"</td>";
                                    }
                                    echo"</table>";
                                    
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

