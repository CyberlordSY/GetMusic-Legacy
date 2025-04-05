<?php 
include('header.php');

$hash_pass="";
$pass="";
$msg="";


if($_SESSION['IS_LOGIN']=='yes'){
	$name=get_safe_value($_SESSION['ADMIN_USER']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from admin where username='$name'"));
	$hash_pass=$row['password'];
}





if(isset($_POST['submit'])){
	$pass=get_safe_value($_POST['password']);
	$npass=get_safe_value($_POST['n_password']);
	$cpass=get_safe_value($_POST['c_password']);
	
	
	if (password_verify($pass, $hash_pass)) {
		if ($cpass==$npass) {
			$hash = password_hash($npass, PASSWORD_DEFAULT);
			$sql = "update admin set password='$hash' where username='$name'";
			mysqli_query($con,$sql);
			redirect('main.php');
		}else{
			$msg = "New password and confirm password does not match";
		}
	} else {
		$msg = "Please enter the correct password";
	}

	
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Edit Password</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                      <label>New Password</label>
                      <input type="text" class="form-control" placeholder="New Password" name="n_password" required>
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input type="text" class="form-control" placeholder="Confirm Password" name="c_password" required>
                    </div>
                    <div class="form-group">
                      <div class="error mt8"><?php echo $msg?></div>
                    </div>                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('fotter.php');?>