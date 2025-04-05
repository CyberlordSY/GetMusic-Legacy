<?php 
include 'header.php';
$msg="";
$path="";
$title="";
$artist="";
$duration="";
$album="";
$genre="";
$id="";
$albumOrder="";
$image_status='required';
$image_error="";
if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from songs where id='$id'"));
	$path = $row['path'];
	$title = $row['title'];
	$artist = $row['artist'];
	$album = $row['album'];
	$duration = $row['duration'];
	$genre = $row['genre'];
	$albumOrder = $row['albumOrder'];
	$image_status = "";
}
if(isset($_POST['submit'])){
	$title=get_safe_value($_POST['title']);
	$artist=get_safe_value($_POST['artist']);
	$album=get_safe_value($_POST['album']);		
	$duration=get_safe_value($_POST['duration']);		
	$genre=get_safe_value($_POST['genre']);		
	$albumOrder=get_safe_value($_POST['albumOrder']);

	if($id==''){
		$type=$_FILES['path']['type'];
		if($type!='audio/mpeg'){
			$image_error="Invalid audio format";
		}else{		
			$image=$_FILES['path']['name'];
			move_uploaded_file($_FILES['path']['tmp_name'],"../assets/music/".$image);
			$sqlhs = "INSERT INTO `songs`(`title`, `artist`, `album`, `genre`, `duration`, `path`, `albumOrder`) VALUES ('$title','$artist','$album','$genre','$duration','assets/music/$image','$albumOrder')";
			mysqli_query($con,$sqlhs);
			redirect('songs.php');
		}
	}else{
		if($_FILES['path']['type']==''){
			mysqli_query($con,"UPDATE `songs` SET `title`='$title',`artist`='$artist',`album`='$album',`genre`='$genre',`duration`='$duration',`albumOrder`='$albumOrder' WHERE id='$id'");
			redirect('songs.php');
		}else{
			$type=$_FILES['path']['type'];	
			if($type!='audio/mpeg'){
				$image_error="Invalid audio format";
			}else{
				$image=$_FILES['path']['name'];
			move_uploaded_file($_FILES['path']['tmp_name'],"../assets/music/".$image);
			$sqllll = "UPDATE `songs` SET `title`='$title',`artist`='$artist',`album`='$album',`genre`='$genre',`duration`='$duration',`albumOrder`='$albumOrder',`path`='assets/music/$image' WHERE id='$id'";
				mysqli_query($con,$sqllll);
				redirect('songs.php');
			}
		}
	}
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Manage Songs</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post" enctype="multipart/form-data">
					<div class="form-group">
                      <label for="exampleInputName1">Chose Song</label>
                      <input type="file" class="form-control" name="path" <?php echo $image_status?>>
					  <div class="error mt8"><?php echo $image_error?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Duration</label>
                      <input <?php echo $image_status?> type="text" class="form-control" placeholder="Enter the duration of the song" name="duration" value="<?php echo $duration?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" placeholder="Enter the name of the song" name="title" required value="<?php echo $title?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Artist</label>
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
                      <label for="exampleInputName1">Album</label>
                      	<select class="form-control"  name="album" required>
	                      <?php
	                      $aarsql = "SELECT * FROM albums order by title asc";
	                      $res = mysqli_query($con,$aarsql);
	                      while ($row = mysqli_fetch_assoc($res)) { ?>
	                      	<?php
	                      	 if ($row['id'] == $album) { ?>
	                      			<option selected value="<?php echo $row['id'] ?>"><?php echo $row["title"]; ?></option>
		                      	<?php }else{ ?>
		                      		<option value="<?php echo $row['id'] ?>"><?php echo $row["title"]; ?></option>
		                      	<?php }
	                      	 ?>
	                      <?php } ?>
                      </select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Genre</label>
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
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Album Order</label>
                      <input type="textbox" class="form-control" placeholder="Enter the Order" name="albumOrder"  value="<?php echo $albumOrder?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
<?php include 'fotter.php'; ?>