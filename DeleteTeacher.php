<html>
<body> 

<?php
$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student75-35303137c55f", "ua92-studentAc", "student75-35303137c55f");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}

// Handle delete request
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $sql = "DELETE FROM Teacher WHERE TeacherID='$id'";
    mysqli_query($link, $sql);
}

?>

<h3>See all Teachers</h3>
	
<table>
    <tr>
        <th width="150px">Teacher ID<br><hr></th>
        <th width="250px">Teacher Name<br><hr></th>
        <th width="250px">Address<br><hr></th>
        <th width="250px">Telephone No<br><hr></th>
        <th width="250px">Actions<br><hr></th>
    </tr>

<?php
// Fetch teachers from database
$sql = "SELECT TeacherID, TeacherName, Address, TelephoneNo FROM Teacher";
$result = mysqli_query($link, $sql);

// Display teachers in table
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<th>{$row['TeacherID']}</th>";
    echo "<th>{$row['TeacherName']}</th>";
    echo "<th>{$row['Address']}</th>";
    echo "<th>{$row['TelephoneNo']}</th>";
    echo "<th><form method='post'>
              <button type='submit' name='delete' value='{$row['TeacherID']}'>Delete</button>
          </form></th>";
    echo "</tr>";
}
?>

</table>
</body>
</html>