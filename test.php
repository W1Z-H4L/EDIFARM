<?php
$data = file_get_contents("https://70d4-103-156-141-254.ap.ngrok.io/EDIFARM/api/image_diag/5b6549f1-5148-4af8-be84-d31681417f5b4888406759248731445.jpg");
$json = base64_encode($data);
echo $json;

?>