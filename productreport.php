<!doctype html>
<html lang="en">
<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="javajamstyle.css">
	<style>
	input {
    text-align: center;
	}
	</style>
</head>



<body>
<div id="wrapper">
  <header>
    <h1><img src="javajam.jpg" alt="JavaJam Coffee House"</h1>
  </header>
  <div id="leftcolumn">
    <b>Total Dollar Sales by Product</b>
  </div>
  <div id="rightcolumn">
    <div class="content">
	<?php
	@ $db = new mysqli('localhost', 'root', '', 'mysql');

	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database.  Please try again later.';
		exit;
	}

	$query = "SELECT * FROM coffee WHERE name = 'Java'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$javaprice = stripslashes($row['price']);
	$javaqty = stripslashes($row['quantity']);
	$javasales = $javaprice * $javaqty;

	$query = "SELECT * FROM coffee WHERE name = 'CafeSingle'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$cafe1price = stripslashes($row['price']);
	$cafe1qty = stripslashes($row['quantity']);
	$cafe1sales = $cafe1price * $cafe1qty;

	$query = "SELECT * FROM coffee as price WHERE name = 'CafeDouble'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$cafe2price = stripslashes($row['price']);
	$cafe2qty = stripslashes($row['quantity']);
	$cafe2sales = $cafe2price * $cafe2qty;

	$query = "SELECT * FROM coffee WHERE name = 'CappSingle'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$capp1price = stripslashes($row['price']);
	$capp1qty = stripslashes($row['quantity']);
	$capp1sales = $capp1price * $capp1qty;

	$query = "SELECT * FROM coffee WHERE name = 'CappDouble'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$capp2price = stripslashes($row['price']);
	$capp2qty = stripslashes($row['quantity']);
	$capp2sales = $capp2price * $capp2qty;
	?>

	<table id="table1">
		<tr><th>Product</th><th>Total Dollar Sales</th></tr>
		<tr><th>Just Java</th>
		<td>$ <?php echo $javasales;?></td>
		</tr>

		<tr>
		<th>Cafe au Lait</th>
		<td><?php echo "$ ".$cafe1sales." (Single)  $ ".$cafe2sales." (Double)";?></td></tr>

		<tr><th>Iced Cappuccino</th>
		<td><?php echo "$ ".$capp1sales." (Single)  $ ".$capp2sales." (Double)";?></td></tr>
	</table>

	</div>
   </div>
<?php
  $result->free();
  $db->close();
?>
   <footer><i><br>
   Copyright &copy; 2016 JavaJam Coffee House<br>
<a href="mailto:yian@zhu.com">yian@zhu.com</a>
   </i></footer>
</div>
</body>


</html>
