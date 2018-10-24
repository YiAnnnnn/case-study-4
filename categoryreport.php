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
    <b>Sales<br>Quantities by Product</b>
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

	$maxproduct = "Just Java";
	$max = $javasales;
	if($cafe1sales > $max){
		$max=$cafe1sales;
		$maxproduct="Cafe Au Lait (Single)";
	}

	if($cafe2sales > $max){
		$max=$cafe2sales;
		$maxproduct="Cafe Au Lait (Double)";
	}

	if($capp1sales > $max){
		$max=$capp1sales;
		$maxproduct="Iced Cappuccino (Single)";
	}

	if($capp2sales > $max){
		$max=$capp2sales;
		$maxproduct="Iced Cappuccino (Double)";
	}

	?>

	<table id="table1">
		<tr><th>Product</th><th>Sales Quantities</th></tr>
		<tr><th>Just Java</th>
		<td><?php echo $javaqty." cups";?></td>
		</tr>

		<tr>
		<th>Cafe au Lait</th>
		<td><?php echo $cafe1qty." Cups (Single)  ".$cafe2qty." Cups (Double)";?></td></tr>

		<tr><th>Iced Cappuccino</th>
		<td><?php echo $capp1qty." Cups (Single)  ".$capp2qty." Cups (Double)";?></td></tr>
	</table>
	<br><br>
	<?php echo "The product that achieved the highest dollar sales is:    <b>".$maxproduct."</b>";?>
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
