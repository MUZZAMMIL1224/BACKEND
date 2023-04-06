<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student75-35303137c55f", "ua92-studentAc", "student75-35303137c55f");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $Address = $_POST['Address'];
    $ContactNo= $_POST['ContactNo'];
    $Email = $_POST['Email'];
   

    $sql = "INSERT INTO parent ( Name, Surname, Address, ContactNo, Email ) VALUES ('$pid, $name, $surname, $address, $cno, $email')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>