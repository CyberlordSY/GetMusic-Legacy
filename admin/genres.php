<?php 
include('header.php');

if(isset($_GET['delete'])){
	$did=$_GET['delete'];
	$sql = "DELETE FROM `genres` WHERE id='$did'";
	mysqli_query($con,$sql);
	redirect('genres.php');
}

$sql="select * from genres order by id DESC";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Genres Master</h1>
			  <a href="manage_genres.php" class="add_link">Add Genres</a>
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>S.No #</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['name']?></td>
                            <td>
															<a href="manage_genres.php?id=<?php echo $row['id']?>"><label class="badge badge-success hand_cursor">Edit</label></a>&nbsp;
															&nbsp;
															<a href="?delete=<?php echo $row['id']?>"><label class="badge badge-danger delete_red hand_cursor">Delete</label></a>
														</td>           
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