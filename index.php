<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title> Hackatron </title>
</head>
<body>
<div class="nav">
<ul>
  <li><a href="#ne">1806331</a></li>
  <br><br><br>
  <li><a class="active" href="index.php"><img src="./Home.png"> Home</a></li>
  <li><a href="./aboutme.html"><img src="./Vector.png"> About Me</a></li>
</ul>
</div>

<div class="container">
    <div class="p1">
    <h1>My Meeting</h1>
    </div>

<div class="container1">
    <div class="p2">
        
    <form id="form" role="search">
        <input type="text" id="search" name="search" value="search" />
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        From:<input type="date" id="b2" name="b2">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        To:<input type="date" id="b2" name="b2">
         <br>
    </div>
    </form>
</div>
    <br>
<div class="container2">
    <table id="customers">
    <tr>
	<th>Sl. No</th>
	<th>Meeting Name</th>
	<th>No of People attending</th>
	<th>Date</th>
	<th>Start Time</th>
	<th>End time</th>
	<th>Actions</th>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["no_people"]; ?></td>
	<td><?php echo $row["date"]; ?></td>
	<td><?php echo $row["starttime"]; ?></td>
	<td><?php echo $row["endtime"]; ?></td>
	<td><a href="delete-process.php?id=<?php echo $row["id"]; ?>"><img src="Delete.png"></a></td>
	</tr>
	<?php
	$i++;
	}
	?>
        <tr>
        <div class="p1">
            <form method="post" action="process.php">
            <td>  </td>
            <td><input type="text" name="name" size="7" value=""></td>
            <td><input  type="text" name="no_people" size="7" value=""></td>
            <td><input  type="date" name="date" size="7" value="date"></td>
            <td><input  type="time" name="starttime" size="7" value="starttime"></td>
            <td><input  type="time" name="endtime" size="7" value="endtime"></td>
            <td><input type="submit" name="save" class="as" value="Add"> </td>
            </form>
            </div>
            </tr>
    </table> 
	
</div>    
</div>    
</body>
</html>
