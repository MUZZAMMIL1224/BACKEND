<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student75-35303137c55f", "ua92-studentAc", "student75-35303137c55f");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">Parent ID<br><hr></th>
				<th width="250px">Name<br><hr></th>
				<th width="250px">Surname<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="250px">Contact No<br><hr></th>
				<th width="250px">Email<br><hr></th>

                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT ParentID, Name, Surname, Address, ContactNo, Email FROM Parents");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ParentID']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Surname']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['ContactNo']}</th>
				<th>{$row['Email']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

