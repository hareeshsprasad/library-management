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
                                        <select class="form-control" style=width:500px>
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
                                  echo "hello";
                              }
                              ?>
                              </form>
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

