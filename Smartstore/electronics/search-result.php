<?php

if (!empty($_POST['keyword'])) {
	$keyword= $_POST['keyword'];
	
	$mobile = file_get_contents('mobile.txt');
	$television = file_get_contents('television.txt');
	$iron = file_get_contents('iron.txt');
	$ac = file_get_contents('ac.txt');
	$kent = file_get_contents('kent.txt');
	$livpure = file_get_contents('livpure.txt');
	$microwave = file_get_contents('microwave.txt');
	$mixer = file_get_contents('mixer.txt');
	$washingMachine = file_get_contents('washing-machine.txt');
	$tablet = file_get_contents('tablet.txt');
	

	$mobile = explode(',', $mobile);
	$television = explode(',', $television);
	$iron = explode(',', $iron);
	$ac = explode(',', $ac);
	$kent = explode(',', $kent);
	$livpure = explode(',', $livpure);
	$microwave = explode(',', $microwave);
	$mixer = explode(',', $mixer);
	$washingMachine = explode(',', $washingMachine);
	$tablet = explode(',', $tablet);

	if(in_array($keyword,$mobile))
	{
		header('Location: mobile-products.php');
	}
	elseif(in_array($keyword,$television))
	{
		header('Location: television-products.php');
	}
	elseif(in_array($keyword,$iron))
	{
		header('Location: iron-products.php');
	}
	elseif(in_array($keyword,$ac))
	{
		header('Location: ac-products.php');
	}
	elseif(in_array($keyword,$kent))
	{
		header('Location: kent-products.php');
	}
	elseif(in_array($keyword,$livpure))
	{
		header('Location: livpure-products.php');
	}
	elseif(in_array($keyword,$microwave))
	{
		header('Location: microwave-products.php');
	}
	elseif(in_array($keyword,$mixer))
	{
		header('Location: mixer-products.php');
	}
	elseif(in_array($keyword,$washingMachine))
	{
		header('Location: washing-machine-products.php');
	}
	elseif(in_array($keyword,$tablet))
	{
		header('Location: tablet-products.php');
	}
	else
	{
		header('Location: miscellaneous-products.php');

	}
}
else
{
	header('Location: index.php');
}
