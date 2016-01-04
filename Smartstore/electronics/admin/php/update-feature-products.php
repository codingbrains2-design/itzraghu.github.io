<?php
if(isset($_POST['featurePic1Heading']))
{
	featurePic1();
}
elseif(isset($_POST['featurePic2Heading']))
{
	featurePic2();
}
elseif(isset($_POST['featurePic3Heading']))
{
	featurePic3();
}elseif(isset($_POST['featurePic4Heading']))
{
	featurePic4();
}

function featurePic1()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'featurePic1';
	$featurePic1Heading = $_POST['featurePic1Heading'];
	$featurePic1Description = $_POST['featurePic1Description'];
	$featurePic1Mrp = $_POST['featurePic1Mrp'];
	$featurePic1Snp = $_POST['featurePic1Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['featurePic1']['name'];



	if (0 < $_FILES['featurePic1']['error']) 
	{
		echo 'Error: ' . $_FILES['featurePic1']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['featurePic1']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $featurePic1Heading,$featurePic1Description,$featurePic1Mrp,$featurePic1Snp,$name));
		echo "ok";
	}
}

function featurePic2()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'featurePic2';
	$featurePic2Heading = $_POST['featurePic2Heading'];
	$featurePic2Description = $_POST['featurePic2Description'];
	$featurePic2Mrp = $_POST['featurePic2Mrp'];
	$featurePic2Snp = $_POST['featurePic2Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['featurePic2']['name'];



	if (0 < $_FILES['featurePic2']['error']) 
	{
		echo 'Error: ' . $_FILES['featurePic2']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['featurePic2']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $featurePic2Heading,$featurePic2Description,$featurePic2Mrp,$featurePic2Snp,$name));
		echo "ok";
	}
}

function featurePic3()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'featurePic3';
	$featurePic3Heading = $_POST['featurePic3Heading'];
	$featurePic3Description = $_POST['featurePic3Description'];
	$featurePic3Mrp = $_POST['featurePic3Mrp'];
	$featurePic3Snp = $_POST['featurePic3Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['featurePic3']['name'];



	if (0 < $_FILES['featurePic3']['error']) 
	{
		echo 'Error: ' . $_FILES['featurePic3']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['featurePic3']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $featurePic3Heading,$featurePic3Description,$featurePic3Mrp,$featurePic3Snp,$name));
		echo "ok";
	}
}
function featurePic4()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'featurePic4';
	$featurePic4Heading = $_POST['featurePic4Heading'];
	$featurePic4Description = $_POST['featurePic4Description'];
	$featurePic4Mrp = $_POST['featurePic4Mrp'];
	$featurePic4Snp = $_POST['featurePic4Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['featurePic4']['name'];



	if (0 < $_FILES['featurePic4']['error']) 
	{
		echo 'Error: ' . $_FILES['featurePic4']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['featurePic4']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $featurePic4Heading,$featurePic4Description,$featurePic4Mrp,$featurePic4Snp,$name));
		echo "ok";
	}
}
