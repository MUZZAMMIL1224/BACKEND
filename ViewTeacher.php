<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student75-35303137c55f", "ua92-studentAc", "student75-35303137c55f");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Teacher</h3>
	
		<table>
		
			<tr>
				<th width="150px">TeacherID<br><hr></th>
				<th width="250px">TeacherName<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="250px">TelephoneNo<br><hr></th>
				
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT TeacherID, TeacherName, Address, TelephoneNo FROM Student");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['TeacherID']}</th>
				<th>{$row['TeacherName']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['TelephoneNo']}</th>
				
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


