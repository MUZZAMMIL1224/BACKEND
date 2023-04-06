<?php

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object.
/*
   $host = "localhost";
   $username  = "root";
   $passwd = " ";
   $dbname = "school";
*/
$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student75-35303137c55f", "ua92-studentAc", "student75-35303137c55f");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
The isset() function checks whether a variable
 is set, which means that it has to be declared 
 and is not NULL. 
 This function returns true if the variable
  exists and is not NULL, 
  otherwise it returns false.
*/
if (isset($_POST['submit'])) {

    $TeacherID = $_POST['TeacherID'];
    $TeacherName = $_POST['TeacherName'];
    $Address = $_POST['Address'];
    $TelephoneNo = $_POST['TelephoneNo'];
   
/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
    $sql = "INSERT INTO student (TeacherID, TeacherName, Address, TelephoneNo, ) VALUES ('$tid, $tname, $address, $tno, ')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>