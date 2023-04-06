<html>
<body> 

<?php
$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student75-35303137c55f", "ua92-studentAc", "student75-35303137c55f");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}

// If the delete button has been clicked, delete the corresponding parent
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM Parents WHERE ParentID = $id";
    mysqli_query($link, $sql);
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
        <th width="100px">Action<br><hr></th>
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
            <td>
                <form method='post'>
                    <input type='hidden' name='id' value='{$row['ParentID']}' />
                    <input type='submit' name='delete' value='Delete' />
                </form>
            </td>
        </tr>";
    }
    ?>
</table>
</body>
</html>
In this modified code, a delete button is added to each row of the table, with a hidden input field that stores the ParentID value of the corresponding parent. When the delete button is clicked, a POST request is sent to the server with the id parameter set to the ParentID value of the parent to be deleted. The PHP code at the top of the page checks if the delete parameter is set in the POST request, and if so, constructs and executes a SQL DELETE statement to delete the corresponding parent.





Regenerate response
