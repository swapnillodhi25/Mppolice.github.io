<?php

error_reporting (0);
include("connection.php");
$query = "select * from dutytable1";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows ($data); 
?> 

<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:800px; line-height:80px;"> 
	<tr> 
		<th colspan="4"><h2>Student Record</h2></th> 
		</tr> 
			  <th> NAME</th> 
			  <th> POLICE ID </th> 
			  <th> STATION NAME </th> 
			  <th> AREA OF DUTY </th> 
			  <th> DATE </th> 
              <th> START TIME </th> 
              <th> END TIME </th> 
		</tr> 
		
		<?php while($result = mysqli_fetch_assoc($data)) 
		{ 
		?> 
		<tr> <td><?php echo $result['full_name']; ?></td> 
		<td><?php echo $result['police_id']; ?></td> 
		<td><?php echo $result['station_name']; ?></td> 
        <td><?php echo $result['area_of_duty']; ?></td>
        <td><?php echo $result['date']; ?></td>
        <td><?php echo $result['start_time']; ?></td>
        <td><?php echo $result['end_time']; ?></td>
		
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>