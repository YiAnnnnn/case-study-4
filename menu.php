<!doctype html>
<html lang="en">
<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="javajamstyle.css">
	<style>
	input {
    text-align: center;
	}</style>
	<script type = "text/javascript"  src = "menuvalidator.js" ></script>
<script>
function popup()
{
alert("Order submitted!");
}
</script>
</head>

<?php

error_reporting(E_ALL & ~E_NOTICE);
	$javanewqty=$_POST['java'];
	$cafe1newqty=$_POST['cafe1'];
	$cafe2newqty=$_POST['cafe2'];
	$capp1newqty=$_POST['cappuccino1'];
	$capp2newqty=$_POST['cappuccino2'];

	@ $db = new mysqli('localhost', 'root', '', 'mysql');

	if (mysqli_connect_errno()) {
		echo 'Error: Could not connect to database.  Please try again later.';
		exit;
	}

	if($javanewqty != 0){
	$query = "SELECT * FROM coffee WHERE name = 'Java'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$javaqty = stripslashes($row['quantity']);
	$javaqty=$javaqty+$javanewqty;
	$query = "UPDATE coffee SET quantity = '".$javaqty."' WHERE name='Java'";
	$result = $db->query($query);
	}

	if($cafe1newqty!=0){
	$query = "SELECT * FROM coffee WHERE name = 'CafeSingle'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$cafe1qty = stripslashes($row['quantity']);
	$cafe1qty=$cafe1qty+$cafe1newqty;
	$query = "UPDATE coffee SET quantity = '".$cafe1qty."' WHERE name='CafeSingle'";
	$result = $db->query($query);
	}

	if($cafe2newqty!=0){
	$query = "SELECT * FROM coffee as price WHERE name = 'CafeDouble'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$cafe2qty = stripslashes($row['quantity']);
	$cafe2qty=$cafe2qty+$cafe2newqty;
	$query = "UPDATE coffee SET quantity = '".$cafe2qty."' WHERE name='CafeDouble'";
	$result = $db->query($query);
	}

	if($capp1newqty!=0){
	$query = "SELECT * FROM coffee WHERE name = 'CappSingle'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$capp1qty = stripslashes($row['quantity']);
	$capp1qty=$capp1qty+$capp1newqty;
	$query = "UPDATE coffee SET quantity = '".$capp1qty."' WHERE name='CappSingle'";
	$result = $db->query($query);
	}

	if($capp2newqty!=0){
	$query = "SELECT * FROM coffee WHERE name = 'CappDouble'";
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$capp2qty = stripslashes($row['quantity']);
	$capp2qty=$capp2qty+$capp2newqty;
	$query = "UPDATE coffee SET quantity = '".$capp2qty."' WHERE name='CappDouble'";
	$result = $db->query($query);
	}

	$db->close();
	?>

<body>
<div id="wrapper">
  <header>
    <h1><img src="javajam.jpg" alt="JavaJam Coffee House"</h1>
  </header>
  <div id="leftcolumn">
    <nav>
      <a href="index.html">Home</a>
      <a href="menu.php">Menu</a>
      <a href="music.html">Music</a>
      <a href="jobs.html">Jobs</a>
	<nav>
  </div>
  <div id="rightcolumn">
    <div class="content">
	<h2>Coffee at JavaJam</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<table id="table1">
		<tr>
		<td colspan="2"></td>
		<th>Quantity</th><th>Subtotal($)</th>
		</tr>
		<tr><th>Just Java</th>
		<td>Regular house blend, decaffeinated coffee, or flavor of the day.<br>
		Endless Cup $2.00</td>
		<td align="center"><input type="text" name="java" id="java" size="2" maxlength="2"></td>
		<td><input type = "text"  size = "5"  id = "subtotalJava" onfocus = "this.blur();" /></td>
		</tr>
		<tr><th>Cafe au Lait</th>
		<td>House blended coffee infused into a smooth, steamed milk.<br>
		Single $2.00 Double $3.00</td>
		<td align="center">Single<input type="text" id="cafe1" size="2" maxlength="2"><br>
		Double<input type="text" id="cafe2" size="2" maxlength="2"></td>
		<td><input type = "text"  size = "5"  id = "subtotalCafe" onfocus = "this.blur();" /></td>
		</tr>
		<tr><th>Iced Cappuccino</th>
		<td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>
		Single $4.75 Double $5.75</td>
		<td align="center">Single<input type="text" id="cappuccino1" size="2" maxlength="2"><br>
		Double<input type="text" id="cappuccino2" size="2" maxlength="2"></td>
		<td><input type = "text"  size = "5"  id = "subtotalCappuccino" onfocus = "this.blur();" /></td>
		</tr>
		<tr>
		<td></td><td></td><th>Total($)</th>
		<td><input type = "text"  size = "5"  id = "cost" onfocus = "this.blur();" /></td>
		</tr>
	</table>
	<input type="submit" name="submit" onclick="popup()" value="Submit Order">
	</form>
	<script type = "text/javascript"  src = "menuvalidatorr.js" ></script>
	</div>
   </div>
   <footer><i><br>
   Copyright &copy; 2016 JavaJam Coffee House<br>
	 <a href="mailto:yian@zhu.com">yian@zhu.com</a>
   </i></footer>
</div>
</body>
</html>
