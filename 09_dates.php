<?php

// Print current date
echo date('l d-m-Y H:i:s') . '<br>';

// Print yesterday
echo date('l d-m-Y H:i:s', time() - 24 * 60 * 60) . '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F J Y H:i:s') . '<br>';

// Print current timestamp
echo time() . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2020-10-12 09:00:00');
echo'<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$datesString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F J Y H:i:s', $datesString);

echo'<pre>';
var_dump($parsedDate);
echo '</pre>';
