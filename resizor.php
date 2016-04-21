<?php

include('SimpleImage.php');

ini_set("memory_limit", "50M");

$image = new SimpleImage();

$sizes = array(16, 29, 32, 36, 40, 48, 50, 57, 58, 60, 64, 72, 76, 80, 87, 96, 100, 114, 120, 128, 144, 152, 167, 180, 192, 256, 512, 1024);

foreach ($sizes as $size) {

    $image->load($argv[1] ? $argv[1] : 'icon.png');
    $image->resize($size, $size);
    $image->save('icon' . $size . 'x' . $size . '.png', IMAGETYPE_PNG);
}

unset($size);

echo "icons generated \r\n";
?>
