<?php
require_once 'database.php';

$job_id = $_POST['job_id'];
$lead_status = "filled";

$stmt = $db->prepare("UPDATE posted_leads SET lead_status=? WHERE id=? ");
$stmt->execute(array( $lead_status, $job_id));
echo "ok";
