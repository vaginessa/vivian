<?php
$db = require_once('mysql.con.inc.php');
$role_id = $_GET['role_id'];

$sql = 'select honor from role where Id = ' . $role_id;
$result = $db->query($sql)->fetch_assoc();
echo $result['honor'];
?>
