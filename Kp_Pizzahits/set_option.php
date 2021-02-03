<?php
// set_option.php

$koneksi = mysqli_connect("localhost", "root", "", "db_pizza_hits");

$output = '';
$sql = '';
// $ukuran = "Personal";
// isset($_POST["ukuran"])
// $_POST["ukuran"] != ''

if (isset($_POST["ukuran"]))
{
	if ($_POST["ukuran"] != '$ukuran')
	{
		$sql = "SELECT * FROM pinggiran_makanan";
	}

	$result_pinggiran = mysqli_query($koneksi,$sql);

	while($row = mysqli_fetch_array($result_pinggiran))
	{
   	   	$output = "<option>$row["0"]</option>";
   	   	echo $row[0];
	}

} 


?>