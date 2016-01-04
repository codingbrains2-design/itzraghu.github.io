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
}
elseif(isset($_POST['pic4Heading']))
{
	pic4();
}
elseif(isset($_POST['pic5Heading']))
{
	pic5();
}
elseif(isset($_POST['pic6Heading']))
{
	pic6();
}
elseif(isset($_POST['pic7Heading']))
{
	pic7();
}
elseif(isset($_POST['pic8Heading']))
{
	pic8();
}
elseif(isset($_POST['pic9Heading']))
{
	pic9();
}
elseif(isset($_POST['pic10Heading']))
{
	pic10();
}
elseif(isset($_POST['pic11Heading']))
{
	pic11();
}
elseif(isset($_POST['pic12Heading']))
{
	pic12();
}
elseif(isset($_POST['pic13Heading']))
{
	pic13();
}
elseif(isset($_POST['pic14Heading']))
{
	pic14();
}
elseif(isset($_POST['pic15Heading']))
{
	pic15();
}
elseif(isset($_POST['pic16Heading']))
{
	pic16();
}
elseif(isset($_POST['pic17Heading']))
{
	pic17();
}
elseif(isset($_POST['pic18Heading']))
{
	pic18();
}
elseif(isset($_POST['pic19Heading']))
{
	pic19();
}
elseif(isset($_POST['pic20Heading']))
{
	pic20();
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
	$path = '../../mobiles/' . "$date" . $_FILES['pic1']['name'];



	if (0 < $_FILES['pic1']['error']) 
	{
		echo 'Error: ' . $_FILES['pic1']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic1']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
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
	$path = '../../mobiles/' . "$date" . $_FILES['pic2']['name'];



	if (0 < $_FILES['pic2']['error']) 
	{
		echo 'Error: ' . $_FILES['pic2']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic2']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
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
	$path = '../../mobiles/' . "$date" . $_FILES['pic3']['name'];



	if (0 < $_FILES['pic3']['error']) 
	{
		echo 'Error: ' . $_FILES['pic3']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic3']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
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
	$path = '../../mobiles/' . "$date" . $_FILES['pic4']['name'];



	if (0 < $_FILES['pic4']['error']) 
	{
		echo 'Error: ' . $_FILES['pic4']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic4']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic4Heading,$pic4Description,$pic4Mrp,$pic4Snp,$name));
		echo "ok";
	}
}

function pic5()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic5';
	$pic5Heading = $_POST['pic5Heading'];
	$pic5Description = $_POST['pic5Description'];
	$pic5Mrp = $_POST['pic5Mrp'];
	$pic5Snp = $_POST['pic5Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic5']['name'];



	if (0 < $_FILES['pic5']['error']) 
	{
		echo 'Error: ' . $_FILES['pic5']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic5']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic5Heading,$pic5Description,$pic5Mrp,$pic5Snp,$name));
		echo "ok";
	}
}

function pic6()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic6';
	$pic6Heading = $_POST['pic6Heading'];
	$pic6Description = $_POST['pic6Description'];
	$pic6Mrp = $_POST['pic6Mrp'];
	$pic6Snp = $_POST['pic6Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic6']['name'];



	if (0 < $_FILES['pic6']['error']) 
	{
		echo 'Error: ' . $_FILES['pic6']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic6']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic6Heading,$pic6Description,$pic6Mrp,$pic6Snp,$name));
		echo "ok";
	}
}
function pic7()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic7';
	$pic7Heading = $_POST['pic7Heading'];
	$pic7Description = $_POST['pic7Description'];
	$pic7Mrp = $_POST['pic7Mrp'];
	$pic7Snp = $_POST['pic7Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic7']['name'];



	if (0 < $_FILES['pic7']['error']) 
	{
		echo 'Error: ' . $_FILES['pic7']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic7']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic7Heading,$pic7Description,$pic7Mrp,$pic7Snp,$name));
		echo "ok";
	}
}
function pic8()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic8';
	$pic8Heading = $_POST['pic8Heading'];
	$pic8Description = $_POST['pic8Description'];
	$pic8Mrp = $_POST['pic8Mrp'];
	$pic8Snp = $_POST['pic8Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic8']['name'];



	if (0 < $_FILES['pic8']['error']) 
	{
		echo 'Error: ' . $_FILES['pic8']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic8']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic8Heading,$pic8Description,$pic8Mrp,$pic8Snp,$name));
		echo "ok";
	}
}
function pic9()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic9';
	$pic9Heading = $_POST['pic9Heading'];
	$pic9Description = $_POST['pic9Description'];
	$pic9Mrp = $_POST['pic9Mrp'];
	$pic9Snp = $_POST['pic9Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic9']['name'];



	if (0 < $_FILES['pic9']['error']) 
	{
		echo 'Error: ' . $_FILES['pic9']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic9']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic9Heading,$pic9Description,$pic9Mrp,$pic9Snp,$name));
		echo "ok";
	}
}
function pic10()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic10';
	$pic10Heading = $_POST['pic10Heading'];
	$pic10Description = $_POST['pic10Description'];
	$pic10Mrp = $_POST['pic10Mrp'];
	$pic10Snp = $_POST['pic10Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic10']['name'];



	if (0 < $_FILES['pic10']['error']) 
	{
		echo 'Error: ' . $_FILES['pic10']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic10']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic10Heading,$pic10Description,$pic10Mrp,$pic10Snp,$name));
		echo "ok";
	}
}
function pic11()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic11';
	$pic11Heading = $_POST['pic11Heading'];
	$pic11Description = $_POST['pic11Description'];
	$pic11Mrp = $_POST['pic11Mrp'];
	$pic11Snp = $_POST['pic11Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic11']['name'];



	if (0 < $_FILES['pic11']['error']) 
	{
		echo 'Error: ' . $_FILES['pic11']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic11']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic11Heading,$pic11Description,$pic11Mrp,$pic11Snp,$name));
		echo "ok";
	}
}
function pic12()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic12';
	$pic12Heading = $_POST['pic12Heading'];
	$pic12Description = $_POST['pic12Description'];
	$pic12Mrp = $_POST['pic12Mrp'];
	$pic12Snp = $_POST['pic12Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic12']['name'];



	if (0 < $_FILES['pic12']['error']) 
	{
		echo 'Error: ' . $_FILES['pic12']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic12']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic12Heading,$pic12Description,$pic12Mrp,$pic12Snp,$name));
		echo "ok";
	}
}function pic13()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic13';
	$pic13Heading = $_POST['pic13Heading'];
	$pic13Description = $_POST['pic13Description'];
	$pic13Mrp = $_POST['pic13Mrp'];
	$pic13Snp = $_POST['pic13Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic13']['name'];



	if (0 < $_FILES['pic13']['error']) 
	{
		echo 'Error: ' . $_FILES['pic13']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic13']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic13Heading,$pic13Description,$pic13Mrp,$pic13Snp,$name));
		echo "ok";
	}
}
function pic14()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic14';
	$pic14Heading = $_POST['pic14Heading'];
	$pic14Description = $_POST['pic14Description'];
	$pic14Mrp = $_POST['pic14Mrp'];
	$pic14Snp = $_POST['pic14Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic14']['name'];



	if (0 < $_FILES['pic14']['error']) 
	{
		echo 'Error: ' . $_FILES['pic14']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic14']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic14Heading,$pic14Description,$pic14Mrp,$pic14Snp,$name));
		echo "ok";
	}
}
function pic15()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic15';
	$pic15Heading = $_POST['pic15Heading'];
	$pic15Description = $_POST['pic15Description'];
	$pic15Mrp = $_POST['pic15Mrp'];
	$pic15Snp = $_POST['pic15Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic15']['name'];



	if (0 < $_FILES['pic15']['error']) 
	{
		echo 'Error: ' . $_FILES['pic15']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic15']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic15Heading,$pic15Description,$pic15Mrp,$pic15Snp,$name));
		echo "ok";
	}
}function pic16()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic16';
	$pic16Heading = $_POST['pic16Heading'];
	$pic16Description = $_POST['pic16Description'];
	$pic16Mrp = $_POST['pic16Mrp'];
	$pic16Snp = $_POST['pic16Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic16']['name'];



	if (0 < $_FILES['pic16']['error']) 
	{
		echo 'Error: ' . $_FILES['pic16']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic16']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic16Heading,$pic16Description,$pic16Mrp,$pic16Snp,$name));
		echo "ok";
	}
}
function pic17()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic17';
	$pic17Heading = $_POST['pic17Heading'];
	$pic17Description = $_POST['pic17Description'];
	$pic17Mrp = $_POST['pic17Mrp'];
	$pic17Snp = $_POST['pic17Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic17']['name'];



	if (0 < $_FILES['pic17']['error']) 
	{
		echo 'Error: ' . $_FILES['pic17']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic17']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic17Heading,$pic17Description,$pic17Mrp,$pic17Snp,$name));
		echo "ok";
	}
}
function pic18()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic18';
	$pic18Heading = $_POST['pic18Heading'];
	$pic18Description = $_POST['pic18Description'];
	$pic18Mrp = $_POST['pic18Mrp'];
	$pic18Snp = $_POST['pic18Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic18']['name'];



	if (0 < $_FILES['pic18']['error']) 
	{
		echo 'Error: ' . $_FILES['pic18']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic18']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic18Heading,$pic18Description,$pic18Mrp,$pic18Snp,$name));
		echo "ok";
	}
}
function pic19()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic19';
	$pic19Heading = $_POST['pic19Heading'];
	$pic19Description = $_POST['pic19Description'];
	$pic19Mrp = $_POST['pic19Mrp'];
	$pic19Snp = $_POST['pic19Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic19']['name'];



	if (0 < $_FILES['pic19']['error']) 
	{
		echo 'Error: ' . $_FILES['pic19']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic19']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic19Heading,$pic19Description,$pic19Mrp,$pic19Snp,$name));
		echo "ok";
	}
}
function pic20()
{
	require_once 'database.php';
	$id = NULL;
	$name = 'pic20';
	$pic20Heading = $_POST['pic20Heading'];
	$pic20Description = $_POST['pic20Description'];
	$pic20Mrp = $_POST['pic20Mrp'];
	$pic20Snp = $_POST['pic20Snp'];
	$date = new DateTime();
	$date = $date->format("U");
	$path = '../../mobiles/' . "$date" . $_FILES['pic20']['name'];



	if (0 < $_FILES['pic20']['error']) 
	{
		echo 'Error: ' . $_FILES['pic20']['error'] . '<br>';
	}
	else 
	{
		move_uploaded_file($_FILES['pic20']['tmp_name'], $path);
		$stmt = $db->prepare("UPDATE mobiles SET image_path=?,heading=?,description=?,mrp=?,snp=? WHERE name=?");
		$stmt->execute(array($path, $pic20Heading,$pic20Description,$pic20Mrp,$pic20Snp,$name));
		echo "ok";
	}
}
