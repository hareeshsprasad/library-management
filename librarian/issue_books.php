<?php 
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
                              <form action="" name="myform" method="post">
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
                              <?php
                              if(isset($_POST['submit'])){
                                $res=mysqli_query($link,"select * from student_registration where enrollment=$_POST[enr]"); 
                                while($row=mysqli_fetch_array($res)){
                                   $enrollment=$row['enrollment'];
                                   $firstname=$row['firstname'];
                                   $lastname=$row['lastname'];
                                   $sem=$row['sem'];
                                   $contact=$row['contact'];
                                   $email=$row['email'];
                                   $username=$row['username'];
                                }


                                 ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="enrollmentno" placeholder="Enrollment Nmber" value="<?php echo $enrollment;?>" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="studentname" placeholder="student name" value="<?php echo $firstname.' '.$lastname;?>" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="studentsem" placeholder="student sem" value="<?php echo $sem;?>" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="studentcontact" placeholder="student contact" value="<?php echo $contact;?>" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="studentemail" placeholder="student email" value="<?php echo $email;?>" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-control selectpicker"  name="booksname">
                                            <?php
                                           $res=mysqli_query($link,"select books_name from books");        
                                           while($row=mysqli_fetch_array($res)){
                                               echo "<option>";
                                               echo $row["books_name"];
                                               echo "</option>";
                                           }
                                            ?>
                                            </select>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="issuedate" placeholder="issuedate" value="<?php echo date("d-m-y");?>" required>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="studentusername" placeholder="studentusername" value="<?php echo $username;?>" readonly >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" class="form-control btn btn-default" name="issuebook" value="Issue Book" style="background-color:blue;width:500px;align:center;color:white;">
                                        </td>
                                    </tr>
                                </table>
                                 <?php
                                 
                              }
                              ?>
                              </form>
                              <?php
                              if(isset($_POST['issuebook'])){
                                $enrollment=$_POST['enrollmentno'];
                                $name=$_POST['studentname'];
                                $sem=$_POST['studentsem'];
                                $contact=$_POST['studentcontact'];
                                $email=$_POST['studentemail'];
                                $book_name=$_POST['booksname'];
                                $issue_date=$_POST['issuedate'];
                                $studentusername=$_POST['studentusername'];
                                $query="INSERT INTO `issue_books`( `student_enrollment`, `student_name`, `student_sem`, `student_contact`, `student_email`, `books_name`, `books_issue_date`, `book_return_date`, `student_username`) 
                                VALUES (' $enrollment','$name','$sem','$contact','$email','$book_name','$issue_date','','$studentusername')";                            
                                mysqli_query($link,$query);
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