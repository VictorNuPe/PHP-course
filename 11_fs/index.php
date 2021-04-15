
<?php
// Magic constants
echo __DIR__ . '<br>'; // prints the current directory
echo __FILE__ . '<br>';// prints the current file
echo __LINE__ . '<br>';// prints the current line of code

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test2');

// Read files and folders inside directory
$files = scandir('../');

echo'<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', 'Some content');

// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $usersJson;

$users = json_decode($usersJson, true);
echo'<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php

// file_exists
file_exists('sample.txt'); // true

// is_dir
echo is_dir('./11_fs'); // true

// filemtime(gets file modification time)
echo date('F d Y H:i:s', filemtime('./00_syntax.php'));

// filesize
echo filesize('./11_fs/sample.txt');

// disk_free_space
echo disk_free_space('B:');

// file(reads the entire file into an array)
$lines = file('http://www.example.com/');

// Loop through our array, show HTML source as HTML source; and line numbers too.
foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b> : " . $line . "<br />\n";
}


echo file('https://jsonplaceholder.typicode.com/users', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
