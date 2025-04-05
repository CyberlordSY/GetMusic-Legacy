<?php include( 'header.php'); 
if(isset($_GET[ 'delete'])){ $did=$_GET[ 'delete']; 
	mysqli_query($con, "DELETE FROM `albums` WHERE id='$did'");
	mysqli_query($con, "DELETE FROM `songs` WHERE album='$did'"); 
	redirect( 'albums.php'); 
} 
$sql="select * from albums ORDER BY id DESC";
$res=mysqli_query($con,$sql); 
?>
<div class="card">
  <div class="card-body">
    <h1 class="grid_title">Albums Master</h1>
    <a href="manage_albums.php" class="add_link">Add Albums</a>
    <div class="row grid_box">
      <div class="col-12">
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                <th>S.No #</th>
                <th>Name</th>
                <th>Artist</th>
                <th>Genres</th>
                <th>Photo</th>
                <th>Songs</th>
                <th>Action</th>
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

              	 	$dd5ed = $row['genre'];
              	 	$sqlgrr = "SELECT name FROM genres WHERE id=$dd5ed";
              	 	$gres = mysqli_query($con, $sqlgrr);
              	 	$grrow = mysqli_fetch_assoc($gres);
                  
                  $jejgg = $row['id'];
                  $hudsfb = "SELECT * FROM songs WHERE album=$jejgg";
                  $bjgrfn = mysqli_query($con, $hudsfb);
                  $ewhv = mysqli_num_rows($bjgrfn);
              	?>
              <tr>
                <td>
                  <?php echo $i?>
                </td>
                <td>
                  <?php echo $row['title']?>
                </td>
                <td>
                  <?php echo $arrow['name']?>
                </td>
                <td>
                  <?php echo $grrow['name']?>
                </td>
                <td>
                 	<img src="../<?php echo $row['artworkPath']; ?>">
                </td>
                <td>
                  <?php 
                    echo $ewhv;
                  ?>
                </td>
                <td>
                  <a href="manage_albums.php?id=<?php echo $row['id']?>">
                    <label class="badge badge-success hand_cursor">Edit</label>
                  </a>&nbsp;
                  <a href="?delete=<?php echo $row['id']?>">
                    <label class="badge badge-danger delete_red hand_cursor">Delete</label>
                  </a>
                </td>
              </tr>
              <?php $i++; } } else { ?>
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
<?php include( 'fotter.php');?>