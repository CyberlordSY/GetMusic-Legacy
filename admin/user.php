<?php 
include('header.php');

$sql="select * from users order by id desc";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">User Master</h1>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>S.No #</th>
                            <th>Username</th>
                            <th>Firstname</th>
														<th>lastname</th>
														<th>email</th>
							              <th>Signup Date</th>
                            <!-- <th>Admin</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['username']?></td>
                            <td><?php echo $row['firstname']?></td>
                            <td><?php echo $row['lastname']?></td>
                            <td><?php echo $row['email']?></td>
                            <td>
                              <?php 
                                $dateStr=strtotime($row['signup_date']);
                                echo date('d-M-Y',$dateStr);
                              ?>
                            </td>
                            <!-- <td>
                              <a href="manage_artists.php?id=<?php echo $row['admin']?>"><label class="badge badge-success hand_cursor">Edit</label></a>
                            </td>   -->
                           
                        </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="5">No data found</td>
						</tr>
						<?php } ?>
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
        
<?php include('fotter.php');?>