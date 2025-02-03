<?php
$image = \imagecreatefromjpeg('C:\Users\badre\Downloads\c08505208_500x367.jpg');
if ($image === false) {
    echo "Failed to load image";
} else {
    echo "Image loaded successfully";
}
?>
