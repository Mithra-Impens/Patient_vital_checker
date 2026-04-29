<?php 

function scanFolder($path) {

    $items = scandir($path);

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }

        $fullPath = $path . "/" . $item;

        if (is_dir($fullPath)) {
            scanFolder($fullPath);
        } else {
            if ($path === __DIR__) {
                echo "File: " . $item . "<br>";
            }
        }
    }
}

?>
