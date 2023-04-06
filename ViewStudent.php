<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student75-35303137c55f", "ua92-studentAc", "student75-35303137c55f");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">StudentID<br><hr></th>
				<th width="250px">Name<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="250px">Email<br><hr></th>
				<th width="250px">ClassID<br><hr></th>
				<th width="250px">TeacherID<br><hr></th>
				<th width="250px">ParentsID<br><hr></th>
                
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT StudentID, Name, Address, Email, ClassID, TeacherID, ParentsID FROM Student");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['StudentID']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['Email']}</th>
				<th>{$row['ClassID']}</th>
				<th>{$row['TeacherID']}</th>
				<th>{$row['Parents']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


