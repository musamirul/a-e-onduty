<?php
  session_start();
  include("includes/config.php");
  //Get Current File Name for Navbar active button
  $current_file_name = basename($_SERVER['PHP_SELF']); 
  date_default_timezone_set("Asia/Kuala_Lumpur");

?>

<?php
  $sql = "SELECT COUNT(*) as rowCount FROM aedash WHERE Aedash_TimeStamp > DATE_SUB(NOW(), INTERVAL 5 SECOND)"; // Adjust the time interval as needed

  
    $result = $con->query($sql);

    if ($result === false) {
        die("Error: " . $con->error);
    }

    $row = $result->fetch_assoc();
    $rowCount = $row["rowCount"];

    // Determine if a new row has been inserted
    $newRowInserted = ($rowCount > 0);

    // Close the database connection
    $con->close();

    // Return the result as JSON
    $response = array('newRowInserted' => $newRowInserted);
    header('Content-Type: application/json');
    echo json_encode($response);



?>
