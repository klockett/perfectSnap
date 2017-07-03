<?php
// set header content-type to application/json
header("Content-type:application/json");
// make pdo connection
$user = 'root';
//store db password
$pass = 'root';
//instantiate pdo object, passing credentials as well as setting host, dbname, and port number
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
// prepare select statement
$sql = 'SELECT * FROM fruits ORDER BY RAND() LIMIT 1;';
$stmnt = $dbh->prepare($sql);
// execute
$stmnt->execute();
// assign result to statement's fetchall indexed by column name
$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);
// echo out json encoded result
echo json_encode($result);
?>