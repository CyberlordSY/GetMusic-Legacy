<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($str){
	global $con;
	$str=mysqli_real_escape_string($con,$str);
	return $str;

}

function redirect($link){
	?>
	<script>
	window.location.href='<?php echo $link?>';
	</script>
	<?php
	die();
}
?>