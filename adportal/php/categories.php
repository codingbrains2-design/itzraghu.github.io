<?php
		require_once 'database.php';

		$arr = array();

		$sql = $dbh->query("SELECT category, subcategory FROM categories");

		foreach ($sql as $key => $value) {
			
				$arr[$key] = $value;
			
			
		}

		$result = json_encode($arr);

		echo $result;