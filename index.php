
<?php
$servername = "mysql:host=localhost;dbname=watchking";
$username = "root";
$password = "";

try {
  $conn = new PDO($servername, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo "Erorr";
}
?>
<?php 
	$level=1;
	$sql='select * from login where level=?';
	$query=$conn->prepare($sql);
	$query->bindValue(1,$level);
	$query->execute();
	foreach ($query as $key) {
		echo $key['username'];
	}
 ?>