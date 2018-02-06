<?php
$dbHostname = 'localhost';
$dbDatabase = 'eli_correa';
$dbUsername = 'eli.correa';
$dbPassword = '0130';
$db = new PDO("mysql:host=$dbHostname;dbname=$dbDatabase;charset=utf8", $dbUsername, $dbPassword);
function getResultFromSQL($sql, $values = []) {
    
    global $db;
    
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    
    return $stmt->fetchAll();
}
?> 