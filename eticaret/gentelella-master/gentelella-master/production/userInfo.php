<?php include 'header.php';
     include '../funcFile/connect.php'; ?>
     <?php
    
    $usersor=$db->prepare("SELECT * FROM user");
    $usersor->execute();

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">

                <i class="fa fa-user ms-3"> </i>   USER PAGE
            </div>
                <div class="table-responsive">
                    <table class="table table-striped
                    table-hover	
                    table-borderless
                    table-primary
                    align-middle">
                        <thead class="table-light">
                            <caption>USER</caption>
                            <tr>
                                <th>USER ID</th>
                                <th>USER LONG NAME</th>
                                <th>USER NAME</th>
                                <th> USER Password</th>
                                <th>user mail</th>
                            </tr>
                            </thead>
                            
                        
                            <tbody class="table-group-divider">
                                    <?php 
                                    while($usercek=$usersor->fetch(PDO::FETCH_ASSOC)) { ?>

                                <tr class="table-primary" >
                                    
                                    
                                    
                                    <td scope="row">
                                        <?php echo $usercek['userID']; ?>
                                    </td>
                                    <td><?php echo $usercek['userNameLastName']; ?></td>
                                    <td><?php echo $usercek['userName']; ?></td>
                                    <td> <input type="password" style="padding:10px;"disabled value="<?php echo $usercek['userPassword']; ?>"> <button type="button" style="border:none;background-color:transparent; margin-left:-25px;"><i class="fa fa-edit"></i></button></td> 
                                    <td> <?php echo $usercek['userMail']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                            
                            <tfoot>
                                
                            </tfoot>
                    </table>
                </div>
                
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->




<?php include 'footer.php'; ?>