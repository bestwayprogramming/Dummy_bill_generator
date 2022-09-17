<?php
include_once 'php/connection.php';
$con= "select * from detail ORDER BY id DESC LIMIT 1";
$result=mysqli_query($conn,$con);
?> 

        <html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Student Record</h2></th> 
		</tr> 
			  <th> uname </th> 
			  <th> email_id </th> 
			  <th> date </th> 
			  <th> time </th> 
			  
		</tr> 
        <?php while($rows=mysqli_fetch_array($result)) 
		{ 
		?>
		<tr>
			<td><?php echo $rows['id'];?></td> 
			<td><?php echo $rows['uname']; ?></td> 
		<td><?php echo $rows['email_id']; ?></td> 
		<td><?php echo $rows['date']; ?></td> 
		<td><?php echo $rows['time']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 
        </table> 
	</body> 
	</html>