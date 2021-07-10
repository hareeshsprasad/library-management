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
                                <h2>Send Message</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               <form action="" method="post">
                               <table>
                                <tr>
                                    <td>
                                        <select name="enr" class="form-control" style=width:500px>
                                        <?php
                                        $res=mysqli_query($link,"select username from student_registration");        
                                        while($row=mysqli_fetch_array($res)){
                                            echo "<option>";
                                            echo $row["username"];
                                            echo "</option>";
                                        }
                                        ?>
                                        </select>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="title" placeholder="Message Title"  required>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td>
                                            <textarea class="form-control" name="message"  required></textarea>
                                        </td>
                                    </tr>
                                </tr>    
                                <tr>   
                                <td>
                                    <input type="submit" name="submit" value="send message" class="form-control btn btn-default" style="margin-top:5px"/>
                                </td>
                                </tr>
                              </table>   

                               </form>
                               <?php
                                if(isset($_POST['submit'])){
                                    $student_username=$_POST['enr'];
                                    $title=$_POST['title'];
                                    $message=$_POST['message'];                                   
                                    $query="INSERT INTO `messages`(`librarian_username`, `student_username`, `title`, `message`, `read1`) VALUES ('$_SESSION[librarian]',' $student_username ',' $title ',' $message ','0')";
                                    mysqli_query($link,$query);
                                    ?>
                                        <div class="alert alert-success col-lg-12 col-lg-push-0">
                                            <strong style="color:white"></strong> Message send.                                
                                        </div>
                                    <?php
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

