<?php include 'header.php';
if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
	$type=get_safe_value($_GET['type']);
	$id=get_safe_value($_GET['id']);
	if($type=='delete'){
		mysqli_query($con,"delete from songs where id='$id'");
		redirect('songs.php');
	}
}
$sql="select * from songs order by id DESC";
$res=mysqli_query($con,$sql);
?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Song Master</h1>
			  <a href="manage_songs.php" class="add_link">Add Song</a>
              <div class="row grid_box">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table" style="text-align: center;">
                      <thead>
                        <tr>
                            <th>S.No #</th>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Album</th>
							<th>Genres</th>
							<th>Song</th>
							<th>Duration</th>
							<th>Album Order</th>
							<th>Plays</th>
							<th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
							$i=1;
							while($row=mysqli_fetch_assoc($res)){
								$ddd = $row['artist'];
			              	 	$sqlarr = "SELECT name FROM artists WHERE id=$ddd";
			              	 	$ares = mysqli_query($con, $sqlarr);
			              	 	$arrow = mysqli_fetch_assoc($ares);

			              	 	$hyuger = $row['album'];
			              	 	$hhew = "SELECT title FROM albums WHERE id=$hyuger";
			              	 	$ejurih = mysqli_query($con, $hhew);
			              	 	$euhr = mysqli_fetch_assoc($ejurih);

			              	 	$dd5ed = $row['genre'];
			              	 	$sqlgrr = "SELECT name FROM genres WHERE id=$dd5ed";
			              	 	$gres = mysqli_query($con, $sqlgrr);
			              	 	$grrow = mysqli_fetch_assoc($gres);
						?>
						<tr>
                            <td><?php echo $i?></td>
							<td><?php echo $row['title']?></td>
							<td><?php echo $arrow['name']?></td>
							<td><?php echo $euhr['title']?></td>
							<td><?php echo $grrow['name']?></td>
							<td>
								<audio controls style="width: 160px;overflow: scroll;">
									<source src="../<?php echo $row['path'] ?>" type="audio/mpeg">
								</audio>
							</td>
							<td><?php echo $row['duration']?></td>
							<td><?php echo $row['albumOrder']?></td>
							<td><?php echo $row['plays']?></td>
							<td>
								<a href="manage_songs.php?id=<?php echo $row['id']?>"><label class="badge badge-success hand_cursor">Edit</label></a><br><br>								
								<a href="?id=<?php echo $row['id']?>&type=delete"><label class="badge badge-danger delete_red hand_cursor">Delete</label></a>
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







<?php include 'fotter.php'; ?>