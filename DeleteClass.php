<?php
$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student75-35303137c55f", "ua92-studentAc", "student75-35303137c55f");

// Check connection
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get student ID from form
    $student_id = $_POST['student_id'];
    
    // Prepare and execute SQL statement to delete student
    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "i", $student_id);
    mysqli_stmt_execute($stmt);
    
    // Check if deletion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Student deleted successfully";
    } else {
        echo "Error deleting student: " . mysqli_error($link);
    }
    
    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}
?>

<!-- Display form to enter student ID -->
<form method="post">
    <label for="student_id">Enter student ID to delete:</label>
    <input type="text" name="student_id" id="student_id">
    <input type="submit" name="submit" value="Delete">
</form>
