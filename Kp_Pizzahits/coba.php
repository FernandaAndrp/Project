<?php
$koneksi = new mysqli("localhost","root","","pizzahits");
$query = "SELECT * FROM size_makanan";
$result = mysqli_query($koneksi,$query);

$result2 = mysqli_query($koneksi, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

	   <select>

            <?php while($row1 = mysqli_fetch_array($result)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
	</select>
	</center>
</body>
</html>