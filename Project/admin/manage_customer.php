<?php
include_once('header.php');
?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Customer </h2> 
						<div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5>Table  Sample One</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Customer Name</th>
									<th>Email</th>
									<th>Password</th>
									<th>Gender</th>
									<th>Laungunges</th>
									<th>Countries</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							foreach($data as $d)
							{
							?>	
                                <tr>
                                    <td><?php echo $d->id?></td>
                                    <td><?php echo $d->name?></td>
                                    <td><?php echo $d->email?></td>
									<td><?php echo $d->pass?></td>
									<td><?php echo $d->gen?></td>
									<td><?php echo $d->lag?></td>
									<td><?php echo $d->cid?></td>
									<td><?php echo $d->status?></td>
                                    <td>
										<a href="#" class="btn btn-danger">Delete</a>
										<a href="#" class="btn btn-info">Edit</a>
										
									</td>
                                </tr>
							<?php
							}
							?>
                               
                            </tbody>
                        </table>

                    </div>
					</div>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   <?php
 include_once('Footer.php');
 ?>