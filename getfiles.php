<?php
$files = scandir('scenarios/');
$files = array_diff($files, array('.', '..'));
echo json_encode(array_values($files));
?>
