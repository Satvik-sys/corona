<?php


$server = 'localhost';
$user = 'root';
$password = '';
$db = 'coronadiv';

$con = mysqli_connect($server,$user,$password,$db);

if ($con) {
 ?>
 <script>
 	alert("connection successful")
 </script>
<?php
}
else{
	?>
 <script>
 	alert("error connecting")
 </script>
<?php
}

?>