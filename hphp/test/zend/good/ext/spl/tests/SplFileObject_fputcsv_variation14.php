<?php

/* Testing fputcsv() to write to a file when default enclosure value and delimiter
   of two chars is provided and file is opened in read only mode */

echo "*** Testing fputcsv() : with enclosure & delimiter of two chars and file opened in read mode ***\n";

$fo = new SplFileObject(__DIR__ . '/SplFileObject_fputcsv_variation14.csv', 'w');

var_dump($fo->fputcsv(array('water', 'fruit'), ',,', '""'));

unset($fo);

echo "Done\n";
?>
<?php error_reporting(0); ?>
<?php
$file = __DIR__ . '/SplFileObject_fputcsv_variation14.csv';
unlink($file);
?>