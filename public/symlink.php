<?php
$target = '/home1/palmatea/school-app/storage/app/public';
$link = '/home1/palmatea/public_html/storage';

if (symlink($target, $link)) {
    echo "Symlink created successfully!";
} else {
    echo "Failed to create symlink.";
}
?>
