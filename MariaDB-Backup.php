<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Taipei');

// SAVE PATH
$DIR = '/var/www/';

// FILENAME
$FILENAME = date('Y-m-d H:i:s') . '.sql.gz';

// DB INFO
$DB_HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = 'password';
$DB_DATABASE = 'db';

$CMD = "mysqldump -h {$DB_HOST} -u {$DB_USERNAME} --password={$DB_PASSWORD} {$DB_DATABASE} | gzip > {$DIR}{$FILENAME}";

exec($CMD);

header('Content-type: application/octet-stream');
header("Content-Disposition: attachment; filename=\"$FILENAME\"");

passthru("cat {$DIR}{$FILENAME}");
