<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $no_people = $_POST['no_people'];
	 $date = $_POST['date'];
	 $starttime = $_POST['starttime'];
	 $endtime = $_POST['endtime'];
	 
	 $sql = "INSERT INTO students (name,no_people,date,starttime,endtime)
	 VALUES ('$name','$no_people','$date','$starttime','$endtime')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>