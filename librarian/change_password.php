        <?php 
        session_start();
        if(!isset($_SESSION["librarian"])){
            ?>
            <script type="text/javascript">
               window.location="login.php";
           </script>
            <?php
               
           }
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
                                <h2>Change password</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="" method="post">
                                    <div>
                                        <input type="password" class="form-control" placeholder="Current Password" name="currentPassword" />
                                    </div>
                                    <div>
                                        <input type="password" class="form-control" placeholder="New Password" name="newPassword"   />
                                    </div>
                                    <div>
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword" />
                                    </div>
                                    <div class="col-lg-12  col-lg-push-3">
                                        <input class="btn btn-default submit " type="submit" name="submit1" value="Update Password">
                                    </div>
                           </form>
                           <?php
                           if(isset($_POST['submit1'])){
                               $username=$_SESSION["librarian"];
                            //    echo $username;
                            //    die();
                               $currentpass=$_POST['currentPassword'];
                               $newpass=$_POST['newPassword'];
                               $confirmpass=$_POST['confirmPassword'];
                               $checkPassword=mysqli_query($link,"select * from admin where username='$username'");                               
                               while($row=mysqli_fetch_array($checkPassword)){
                                   $currentPassword=$row['password'];                                   
                               }
                               if($currentpass!=$currentPassword){
                                ?>
                                <div class="alert alert-danger col-lg-12 col-lg-push-0">
                                    <strong style="color:white">Incorrect  current Password.</strong>
                               </div><?Php
                               }
                               elseif($newpass!=$confirmpass)
                               {
                                ?>
                                <div class="alert alert-danger col-lg-12 col-lg-push-0">
                                    <strong style="color:white">New Password And Confirm Password do not matching. </strong>
                               </div><?Php
                               }
                               else{
                                   mysqli_query($link,"update admin set password='$newpass' where username='$username'");
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

