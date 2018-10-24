<?php
error_reporting(E_ALL & ~E_NOTICE);
  $javanew=$_POST['javanew'];
  $cafe1new=$_POST['cafe1new'];
  $cafe2new=$_POST['cafe2new'];
  $capp1new=$_POST['capp1new'];
  $capp2new=$_POST['capp2new'];

  if ($javanew||$cafe1new||$cafe2new||$capp1new||$capp2new != NULL){

	@ $db = new mysqli('localhost', 'root', '', 'mysql');

	if (mysqli_connect_errno()) {
		echo "Error: Could not connect to database.  Please try again later.";
		exit;
	}

	if($javanew !=NULL){
		if (!get_magic_quotes_gpc()){
		$javanew = addslashes($javanew);
		}
	$query = "UPDATE coffee SET price = '".$javanew."' WHERE name='Java'";
	$result = $db->query($query);
	}

	if($cafe1new !=NULL){
		if (!get_magic_quotes_gpc()){
		$cafe1new = addslashes($cafe1new);
		}
	$query = "UPDATE coffee SET price = '".$cafe1new."' WHERE name='CafeSingle'";
	$result = $db->query($query);
	}

	if($cafe2new !=NULL){
		if (!get_magic_quotes_gpc()){
		$cafe2new = addslashes($cafe2new);
		}
	$query = "UPDATE coffee SET price = '".$cafe2new."' WHERE name='CafeDouble'";
	$result = $db->query($query);
	}

	if($capp1new !=NULL){
		if (!get_magic_quotes_gpc()){
		$capp1new = addslashes($capp1new);
		}
	$query = "UPDATE coffee SET price = '".$capp1new."' WHERE name='CappSingle'";
	$result = $db->query($query);
	}

	if($capp2new !=NULL){
		if (!get_magic_quotes_gpc()){
		$capp2new = addslashes($capp2new);
		}
	$query = "UPDATE coffee SET price = '".$capp2new."' WHERE name='CappDouble'";
	$result = $db->query($query);
	}



	$db->close();
   }
?>

<!doctype html>
<!--Brenda Lee Jie Ying 30 August 2016 1.30PM -->
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
    Product<br>
	Price<br>
	Update
  </div>
  <div id="rightcolumn">
    <div class="content">
	<h2>Coffee at JavaJam</h2>

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

	$query = "SELECT * FROM coffee WHERE name = 'CafeSingle'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$cafe1price = stripslashes($row['price']);

	$query = "SELECT * FROM coffee as price WHERE name = 'CafeDouble'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$cafe2price = stripslashes($row['price']);

	$query = "SELECT * FROM coffee WHERE name = 'CappSingle'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$capp1price = stripslashes($row['price']);

	$query = "SELECT * FROM coffee WHERE name = 'CappDouble'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$capp2price = stripslashes($row['price']);
	?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<table id="table1">
		<tr><th>Update Price</th></tr>
		<tr><td align="center"><input type="text" name="javanew" size="5"></td>
		<th>Just Java</th>
		<td>Regular house blend, decaffeinated coffee, or flavor of the day.<br>
		Endless Cup <?php echo $javaprice;?></td>
		</tr>
		<tr><td align="center">Single<br><input type="text" name="cafe1new" size="5"><br>
		Double<br><input type="text" name="cafe2new" size="5"></td>

		<th>Cafe au Lait</th>
		<td>House blended coffee infused into a smooth, steamed milk.<br>
		<?php echo "Single ".$cafe1price." Double ".$cafe2price;?></td></tr>

		<tr><td align="center">Single<br><input type="text" name="capp1new" size="5"><br>
		Double<br><input type="text" name="capp2new" size="5"></td>
		<th>Iced Cappuccino</th>
		<td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
		<?php echo "Single ".$capp1price." Double ".$capp2price;?></td></tr>
		<tr>
		<td align="center"><input type="submit" value="Update"></td><td></td><td></td>
		</tr>
	</table>
	</form>


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
