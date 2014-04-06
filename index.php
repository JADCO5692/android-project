<?php 
try 
{
	require_once 'config.php';
    $conn = mysqlConnector();
	$stmt = $conn->prepare("select * from friendList where FriendId='1' and IdGivenBy='Mobile'");
    $stmt->execute();

    while($row = $stmt->fetch()) 
	{
    	print_r($row);          
    }


        } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
        }
?>