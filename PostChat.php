<?php
// Call file in line
include 'Database.php';

// Create object / Instance
$db = new Database();
$con = $db->Connect();

// Process POST query
$sql = mysqli_query($con, "INSERT INTO chat (id_chat, nama_chat, text_chat, tgl_chat)
VALUES ('', '".$_POST['nama_chat']."', '".$_POST['text_chat']."', '".date("Y-m-d")."')");

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$conn->close();
?>
