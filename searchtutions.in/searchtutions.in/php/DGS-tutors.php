<?php
require_once 'database.php';

$data = array(); 
$stmt = $db->query("SELECT * FROM tutors WHERE tutor_category='Diamond' 
				UNION 
				SELECT * FROM tutors WHERE tutor_category='Gold' 
				UNION 
				SELECT * FROM tutors WHERE tutor_category='Silver' ORDER BY tutor_category");
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach($row as $key => $value) {
	$data[$key] = $value;
}
$result = json_encode($data);
echo $result;