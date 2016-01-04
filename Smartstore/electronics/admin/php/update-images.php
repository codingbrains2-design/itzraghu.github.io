<?php
if(isset($_POST['pic1Heading']))
{
	pic1();
}
elseif(isset($_POST['pic2Heading']))
{
	pic2();
}
elseif(isset($_POST['pic3Heading']))
{
	pic3();
}elseif(isset($_POST['pic4Heading']))
{
	pic4();
}

function pic1()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic1';
	$pic1Heading = $_POST['pic1Heading'];
	$pic1Description = $_POST['pic1Description'];
	$pic1Mrp = $_POST['pic1Mrp'];
	$pic1Snp = $_POST['pic1Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['pic1']['name'];



	if (0 < $_FILES['pic1']['error']) 
	{
		echo 'Error: ' . $_FILES['pic1']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic1']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic1Heading,$pic1Description,$pic1Mrp,$pic1Snp,$name));
		echo "ok";
	}
}

function pic2()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic2';
	$pic2Heading = $_POST['pic2Heading'];
	$pic2Description = $_POST['pic2Description'];
	$pic2Mrp = $_POST['pic2Mrp'];
	$pic2Snp = $_POST['pic2Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['pic2']['name'];



	if (0 < $_FILES['pic2']['error']) 
	{
		echo 'Error: ' . $_FILES['pic2']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic2']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic2Heading,$pic2Description,$pic2Mrp,$pic2Snp,$name));
		echo "ok";
	}
}
function pic3()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic3';
	$pic3Heading = $_POST['pic3Heading'];
	$pic3Description = $_POST['pic3Description'];
	$pic3Mrp = $_POST['pic3Mrp'];
	$pic3Snp = $_POST['pic3Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['pic3']['name'];



	if (0 < $_FILES['pic3']['error']) 
	{
		echo 'Error: ' . $_FILES['pic3']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic3']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic3Heading,$pic3Description,$pic3Mrp,$pic3Snp,$name));
		echo "ok";
	}
}
function pic4()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic4';
	$pic4Heading = $_POST['pic4Heading'];
	$pic4Description = $_POST['pic4Description'];
	$pic4Mrp = $_POST['pic4Mrp'];
	$pic4Snp = $_POST['pic4Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['pic4']['name'];



	if (0 < $_FILES['pic4']['error']) 
	{
		echo 'Error: ' . $_FILES['pic4']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic4']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic4Heading,$pic4Description,$pic4Mrp,$pic4Snp,$name));
		echo "ok";
	}
}
