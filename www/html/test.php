<?php
$host = 'db';
$user = 'root';
$pass = 'root';

echo $_SERVER['DOCUMENT_ROOT'];
echo getenv('MYSQL_HOST');
echo 'Hi';
echo $GLOBALS['config']['mysql']['host'];

$mysqli = new mysqli($host, $user, $pass);

if (!$mysqli->connect_error) {
    echo 'Connection successful!';
}  else {
    echo 'Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}

$mysqli->close();

phpinfo();

?>
