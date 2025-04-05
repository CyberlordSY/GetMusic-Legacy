<?php 
include('header.php');
$msg="";
$id="";
$name="";

if(isset($_GET['id']) && $_GET['id']>0){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from genres where id='$id'"));
	$name=$row['name'];
}

if(isset($_POST['submit'])){
	$name=get_safe_value($_POST['name']);
	
	if($id==''){
		$sql="select * from genres where name='$name'";
	}else{
		$sql="select * from genres where name='$name' and id!='$id'";
	}	
	if(mysqli_num_rows(mysqli_query($con,$sql))>0){
		$msg="Genres already added";
	}else{
		if($id==''){
			
			mysqli_query($con,"insert into genres(name) values('$name')");
		}else{
			mysqli_query($con,"update genres set name='$name' where id='$id'");
		}
		
		redirect('genres.php');
	}
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Manage Genres</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" placeholder="name" name="name" required value="<?php echo $name?>">
                      <div class="error mt8"><?php echo $msg?></div>
                    </div>                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('fotter.php');?>