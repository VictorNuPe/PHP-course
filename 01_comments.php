
<?php

$files = scandir('./');

foreach ($files as $key => $file) {
    echo 'File: ' . $file . '<br>';
}

// echo file_get_contents('./11_fs/sample.txt');

$fileUsed = file('./11_fs/lorem.txt');

$fileStringed = implode('', $fileUsed);

$fileParq = explode(' ', $fileStringed);

foreach ($fileParq as $key => $fileStringed) {
    echo $fileStringed . " ";
}

// for ($i = 0; $i < 10; $i++) {
//     file_put_contents($fileUsed, "The order $i");
//     if ($i >= 9) {
//         unlink('./11_fs/sample.txt');
//     }
// }
