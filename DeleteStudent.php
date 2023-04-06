<html>
<body> 

<?php

$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student75-35303137c55f", "ua92-studentAc", "student75-35303137c55f");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get Student ID from form
  $studentID = $_POST["studentID"];
  
  // Delete student from database
  $sql = "DELETE FROM Student WHERE StudentID='$studentID'";
  if (mysqli_query($link, $sql)) {
    echo "Student deleted successfully";
  } else {
    echo "Error deleting student: " . mysqli_error($link);
  }
}

?>

<h3>See all Students</h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="studentID">Enter Student ID to delete:</label>
  <input type="text" id="studentID" name="studentID">
  <input type="submit" value="Delete">
</form>

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
    <th>{$row['ParentsID']}</th>   
  </tr>";
  }
  ?>
</table>
</body>
</html>
This code will display a form to enter the Student ID to delete. When the user submits the form, the code will execute the DELETE statement to remove the corresponding student from the database. If the deletion is successful, a success message will be displayed. Otherwise, an error message will be displayed.





Regenerate response