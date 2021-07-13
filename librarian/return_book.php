        <?php 
        session_start();
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
                               <form action=""method="post">
                               <table>
                                <tr>
                                    <td>
                                        <select name="enr" class="form-control" style=width:500px>
                                        <?php
                                        $res=mysqli_query($link,"select enrollment from student_registration");        
                                        while($row=mysqli_fetch_array($res)){
                                            echo "<option>";
                                            echo $row["enrollment"];
                                            echo "</option>";
                                        }
                                        ?>
                                        </select>
                                    </td>
                                   
                                <td>
                                    <input type="submit" name="submit" value="search" class="form-control btn btn-default" style="margin-top:5px"/>
                                </td>
                                </tr>
                              </table>
                               </form>
                               <?php
                               if(isset($_POST['submit'])){                        
                                   $query="select * from issue_books where student_enrollment=$_POST[enr]";                                  
                                   $res=mysqli_query($link,$query);                        
                                   echo"<table class='table table-bordered'>";
                                   echo"<tr>";
                                   echo"<th>";echo "Enrollment NUmber"; echo"</th>";
                                   echo"<th>";echo "student Name"; echo"</th>";
                                   echo"<th>";echo "Semester"; echo"</th>";                                   
                                   echo"<th>";echo "Contact"; echo"</th>";  
                                   echo"<th>";echo "Email"; echo"</th>";                                   
                                   echo"<th>";echo "Book Name"; echo"</th>";  
                                   echo"<th>";echo "Issue Date"; echo"</th>";
                                   echo"<th>";echo "Return"; echo"</th>";                                                                 
                                   echo"</tr>";
                                   while($row=mysqli_fetch_array($res)){
                                   echo"<tr>";
                                   echo"<td>";echo $row["student_enrollment"]; echo"</td>";
                                   echo"<td>";echo $row["student_name"]; echo"</td>";
                                   echo"<td>";echo $row["student_sem"];echo"</td>";                                  
                                   echo"<td>";echo $row["student_contact"]; echo"</td>";  
                                   echo"<td>";echo $row["student_email"]; echo"</td>"; 
                                   echo"<td>";echo $row["books_name"]; echo"</td>";                                  
                                   echo"<td>";echo $row["books_issue_date"];echo"</td>"; 
                                   echo"<td>";?><a href="return.php?id=<?php echo $row["id"];?>">Return</a> <?php echo"</td>";                                                               
                                   echo"</tr>";
                                   }
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

