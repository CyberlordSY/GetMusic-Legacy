<?php
include 'header.php';
$msg="";
$artworkPath="";
$title="";
$artist="";
$genre="";
$id="";
$image_status='required';
$image_error="";

if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from albums where id='$id'"));
	$artworkPath=$row['artworkPath'];
	$title=$row['title'];
	$artist=$row['artist'];
	$genre=$row['genre'];
	$image_status='';
}
if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$artist=$_POST['artist'];
	$genre=$_POST['genre'];
	$image_status='';
	if($id==''){
		$type=$_FILES['artworkPath']['type'];
		if($type!='image/jpeg' && $type!='image/png'){
			$image_error="Invalid image format";
		}else{		
			$image=$_FILES['artworkPath']['name'];
			move_uploaded_file($_FILES['artworkPath']['tmp_name'],"../assets/images/artwork/".$image);
			$sqlll = "INSERT INTO `albums`(`title`, `artist`, `genre`, `artworkPath`) VALUES ('$title','$artist','$genre','assets/images/artwork/$image')";
			mysqli_query($con,$sqlll);
			redirect('albums.php');
		}
	}else{
		if($_FILES['artworkPath']['type']==''){
			mysqli_query($con,"UPDATE albums set title='$title',artist='$artist',genre='$genre' where id='$id'");
			redirect('albums.php');
		}else{
			$type=$_FILES['artworkPath']['type'];	
			if($type!='image/jpeg' && $type!='image/png'){
				$image_error="Invalid image format";
			}else{
				$image=$_FILES['artworkPath']['name'];
				move_uploaded_file($_FILES['artworkPath']['tmp_name'],"../assets/images/artwork/".$image);
				$sqlll = "UPDATE albums set title='$title',artist='$artist',genre='$genre',artworkPath='assets/images/artwork/$image' where id='$id'";
				mysqli_query($con, $sqlll);
				redirect('albums.php');
			}
		}
	}
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Manage Albums</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
										<div class="form-group">
                      <label for="exampleInputName1">Image</label>
                      <input type="file" class="form-control" placeholder="Image" name="artworkPath" <?php echo $image_status?>>
					  				<div class="error mt8"><?php echo $image_error?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" placeholder="Heading" name="title" required value="<?php echo $title?>">
                    </div>
										<div class="form-group">
                      <label for="exampleInputName1">artist</label>
                      <select class="form-control"  name="artist" required>
                      <?php
                      $aarsql = "SELECT * FROM artists order by name asc";
                      $res = mysqli_query($con,$aarsql);
                      while ($row = mysqli_fetch_assoc($res)) { ?>
                      	<?php
                      	 if ($row['id'] == $artist) { ?>
                      			<option selected value="<?php echo $row['id'] ?>"><?php echo $row["name"]; ?></option>
	                      	<?php }else{ ?>
	                      		<option value="<?php echo $row['id'] ?>"><?php echo $row["name"]; ?></option>
	                      	<?php }
                      	 ?>
                      <?php } ?>
                      </select>
                    </div>
										<div class="form-group">
                      <label for="exampleInputName1">genres</label>
                      <select class="form-control"  name="genre" required>
                      <?php
                      $aarsql = "SELECT * FROM genres order by name asc";
                      $res = mysqli_query($con,$aarsql);
                      while ($row = mysqli_fetch_assoc($res)) { ?>
                      	<?php
                      	 if ($row['id'] == $genre) { ?>
                      			<option selected value="<?php echo $row['id'] ?>"><?php echo $row["name"]; ?></option>
	                      	<?php }else{ ?>
	                      		<option value="<?php echo $row['id'] ?>"><?php echo $row["name"]; ?></option>
	                      	<?php }
                      	 ?>
                      <?php } ?>
                      </select>
                    </div>                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
<?php include 'fotter.php'; ?>