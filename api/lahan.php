<?php
header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','edifarm');
if(!$db)
{
	echo "Database connection failed";
}
    $sql = "SELECT * FROM lahan Where id_lahan = 1";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     print json_encode($rows);
?>
