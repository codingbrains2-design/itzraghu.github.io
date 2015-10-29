<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	require_once 'database.php';

	$stmt = $db->query("SELECT name,resume FROM user");
	$row = $stmt->fetchall(PDO::FETCH_ASSOC);
	foreach ($row as $value) {
		$filename = $value['resume'];



		?>
		<a href="download.php?id=<?php echo $filename;?>"><?php echo $filename . "<br>";?></a>
		<?php }?>
	</body>
	</html>
	