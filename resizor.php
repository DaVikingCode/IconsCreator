<?php

include('SimpleImage.php');

ini_set("memory_limit", "50M");

$image = new SimpleImage();

$sizes = array(29, 36, 48, 50, 57, 58, 72, 100, 114, 512, 1024);

foreach ($sizes as $size) {

    $image->load($argv[1] ? $argv[1] : 'icon.png');
    $image->resize($size, $size);
    $image->save('icon' . $size . 'x' . $size . '.png', IMAGETYPE_PNG);
}

unset($size);

echo "icons generated \r\n";
?>