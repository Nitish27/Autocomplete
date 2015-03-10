<?php
	error_reporting(0);
	$db_connect = mysqli_connect('localhost','root','','ajax') or die("Database Error");
	$term = $_GET["term"];
	$sql = "SELECT * FROM user where name LIKE '%".$term."%' order by name";
	$result = mysqli_query($db_connect,$sql) or die(mysqli_error());
	$json = array();
		while($row=mysqli_fetch_array($result))
		{
			$json[]=array(
                    'value'=>$row["name"],
                    'label'=>$row["name"]
                        );
		}
		echo json_encode($json);
?>