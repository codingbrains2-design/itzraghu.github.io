<?php
session_start();
require_once 'database.php';

$tutorEmail = $_POST['tutorEmail'];
$tutorCategory = $_POST['tutorCategory'];

if($tutorCategory==='Diamond')
{
    $free_leads = 10;
}
if($tutorCategory==='Gold')
{
    $free_leads = 8;
}
if($tutorCategory==='Premium')
{
    $free_leads = 2;
}
if($tutorCategory==='Silver')
{
    $free_leads = 3;
}
if($tutorCategory==='Super Premium')
{
    $free_leads = 5;
}

if(isset($_SESSION['admin']))
{
    $stmt = $db->prepare("UPDATE tutors SET tutor_category  = ?, free_leads = ?, remaining_leads = ? WHERE email = ?");
    $stmt->execute(array($tutorCategory, $free_leads,$free_leads,$tutorEmail));
    echo "Updated Successfully";
}
else
{
    echo "login first";
}