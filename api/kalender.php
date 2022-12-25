<?php
header("Access-Control-Allow-Origin: *");

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'edifarm');

// Check if the id_lahan and tanggal_mulai and tanggal_selesai parameters are set
if (isset($_POST['id_lahan']) && isset($_POST['tanggal_mulai']) && isset($_POST['tanggal_selesai'])) {
    // Get the id_lahan and tanggal_mulai and tanggal_selesai parameters
    $id_lahan = $_POST['id_lahan'];
    $start = $_POST['tanggal_mulai'];
    $finish = $_POST['tanggal_selesai'];

    // Build the SELECT query
    $sql = "SELECT * FROM jadwal WHERE id_lahan = $id_lahan AND tanggal_mulai BETWEEN '$start' AND '$finish'";

    // Execute the query
    $data = mysqli_query($db, $sql);
    $rows = array();

    // Fetch the results into an array
    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }

    // Return the results as JSON
    print json_encode($rows);
}
?>
