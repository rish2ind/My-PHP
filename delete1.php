<?php
$conn = mysqli_connect("localhost", "root", "", "delete");

if( $conn){
	echo "Connected <br>";
}
else{
	echo "not Connected";
}

if (isset($_POST['submit'])) {
$mobile = $_POST['num'];

$sql = "delete from employe where Mobile = '$mobile'";

$run = mysqli_query($conn, $sql);

if($run){
	echo "Data deleted successfully";
}
else{
	echo "Error in deleting : ".mysqli_error($conn);
}
}

?>