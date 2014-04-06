<?php 
$DB = new PDO("mysql:dbname='test';host='127.5.166.130:3306'", 'admin6XgqKBd', '9sCpyk_VwKEh'); 

$order = "select * from friendList where FriendId='1' and IdGivenBy='Mobile'";
$result = $DB->prepare($sql);

$row1 = mysqli_fetch_array($result);
$getName = $row1["FriendName"];

echo $getName;

?>