<?php

function scanFolder($path)
{
    $items = scandir($path);

    foreach($items as $item)
    {
        if($item != "." && $item != "..")
        {
            $fullPath = $path . "/" . $item;

            if(is_dir($fullPath))
            {
                echo "Folder: " . $item . "<br>";
                scanFolder($fullPath);
            }
            else
            {
                echo "File: " . $item . "<br>";
            }
        }
    }
}

?>