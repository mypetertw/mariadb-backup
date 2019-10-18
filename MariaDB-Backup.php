<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Taipei');

// SAVE PATH
$dir = "/var/www/db/";

// FILENAME
$filename = "dev-" . date("Y-m-d-H-i-s") . ".sql.gz";

// DB INFO
$db_host = "localhost";
$db_username = "root";
$db_password = "password";
$db_database = "db";

$cmd = "mysqldump -h {$db_host} -u {$db_username} --password={$db_password} {$db_database} | gzip > {$dir}{$filename}";

exec($cmd);

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$filename\"");

passthru("cat {$dir}{$filename}");
