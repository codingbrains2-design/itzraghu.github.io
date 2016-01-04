<?php
if(!empty($_FILES['slider1']['name']))
{
	slider1();
}

elseif(!empty($_FILES['slider2']['name']))
{
	slider2();
}
elseif(!empty($_FILES['slider3']['name']))
{
	slider3();
}elseif(!empty($_FILES['slider4']['name']))
{
	slider4();
}


function slider1()
{
	require_once 'database.php';
	$name = 'slider1';
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['slider1']['name'];



	if (0 < $_FILES['slider1']['error']) 
	{
		echo 'Error: ' . $_FILES['slider1']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['slider1']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=? WHERE name=?");
		$stmt->execute(array($path,$name));
		echo "ok";
	}
}


function slider2()
{
	require_once 'database.php';
	$name = 'slider2';
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['slider2']['name'];



	if (0 < $_FILES['slider2']['error']) 
	{
		echo 'Error: ' . $_FILES['slider2']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['slider2']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=? WHERE name=?");
		$stmt->execute(array($path,$name));
		echo "ok";
	}
}

function slider3()
{
	require_once 'database.php';
	$name = 'slider3';
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['slider3']['name'];



	if (0 < $_FILES['slider3']['error']) 
	{
		echo 'Error: ' . $_FILES['slider3']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['slider3']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=? WHERE name=?");
		$stmt->execute(array($path,$name));
		echo "ok";
	}
}

function slider4()
{
	require_once 'database.php';
	$name = 'slider4';
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../images/' . "$date" . $_FILES['slider4']['name'];



	if (0 < $_FILES['slider4']['error']) 
	{
		echo 'Error: ' . $_FILES['slider4']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['slider4']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE images SET image_path=? WHERE name=?");
		$stmt->execute(array($path,$name));
		echo "ok";
	}
}
