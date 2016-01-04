<?php
if(isset($_POST['newPic1Heading']))
{
	newPic1();
}
elseif(isset($_POST['newPic2Heading']))
{
	newPic2();
}
elseif(isset($_POST['newPic3Heading']))
{
	newPic3();
}elseif(isset($_POST['newPic4Heading']))
{
	newPic4();
}

function newPic1()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'newPic1';
	$newPic1Heading = $_POST['newPic1Heading'];
	$newPic1Description = $_POST['newPic1Description'];
	$newPic1Mrp = $_POST['newPic1Mrp'];
	$newPic1Snp = $_POST['newPic1Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['newPic1']['name'];



	if (0 < $_FILES['newPic1']['error']) 
	{
		echo 'Error: ' . $_FILES['newPic1']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['newPic1']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $newPic1Heading,$newPic1Description,$newPic1Mrp,$newPic1Snp,$name));
		echo "ok";
	}
}

function newPic2()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'newPic2';
	$newPic2Heading = $_POST['newPic2Heading'];
	$newPic2Description = $_POST['newPic2Description'];
	$newPic2Mrp = $_POST['newPic2Mrp'];
	$newPic2Snp = $_POST['newPic2Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['newPic2']['name'];



	if (0 < $_FILES['newPic2']['error']) 
	{
		echo 'Error: ' . $_FILES['newPic2']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['newPic2']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $newPic2Heading,$newPic2Description,$newPic2Mrp,$newPic2Snp,$name));
		echo "ok";
	}
}

function newPic3()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'newPic3';
	$newPic3Heading = $_POST['newPic3Heading'];
	$newPic3Description = $_POST['newPic3Description'];
	$newPic3Mrp = $_POST['newPic3Mrp'];
	$newPic3Snp = $_POST['newPic3Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['newPic3']['name'];



	if (0 < $_FILES['newPic3']['error']) 
	{
		echo 'Error: ' . $_FILES['newPic3']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['newPic3']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $newPic3Heading,$newPic3Description,$newPic3Mrp,$newPic3Snp,$name));
		echo "ok";
	}
}
function newPic4()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'newPic4';
	$newPic4Heading = $_POST['newPic4Heading'];
	$newPic4Description = $_POST['newPic4Description'];
	$newPic4Mrp = $_POST['newPic4Mrp'];
	$newPic4Snp = $_POST['newPic4Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['newPic4']['name'];



	if (0 < $_FILES['newPic4']['error']) 
	{
		echo 'Error: ' . $_FILES['newPic4']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['newPic4']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $newPic4Heading,$newPic4Description,$newPic4Mrp,$newPic4Snp,$name));
		echo "ok";
	}
}
