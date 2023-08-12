<?php
$locX = isset($_GET['locX']) ? $_GET['locX'] : '';
$locY = isset($_GET['locY']) ? $_GET['locY'] : '';

if (!empty($locX) && !empty($locY)) {
    $data = "locX: " . $locX . " locY: " . $locY . "\n";
    file_put_contents('locs.txt', $data, FILE_APPEND | LOCK_EX);
echo "harika";
} else {
}
?>
