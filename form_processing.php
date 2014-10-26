<!DOCTYPE>
<html>
	<head>
		<title>Praktikum3</title>
	</head>
	<body>
		<?php
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$submit = $_POST['submit'];

		//echo "<pre>"
		/*print_r($_POST);
		echo "Tere {$username}! Teie parool on {$password}.";*/
		?>
		
  <?php /*if (isset($_POST["username"])) {
    $username = $_POST["username"];
  } else {
    $username = "puudub";
  }*/
  /*if (isset($_POST["password"])) {
    $password = $_POST["password"];
  } else {
    $password = "puudub";
  }*/
  ?>
  <?php	$username = isset($_POST["username"]) ? ($_POST["username"]) : "Puudub";
	$password = isset($_POST["password"]) ? ($_POST["password"]) : "Puudub";
  if ($username == $_POST["username"] && $password == $_POST["password"]) {echo "Tere {$username}! Teie parool on {$password}";} 
  	else {echo "Kasutajanimi või parool on puudu";}
  	//$submit = isset($_POST["username"]) ? ($_POST["username"]) : "Puudub";
	//$submit = isset($_POST["password"]) ? ($_POST["password"]) : "Puudub";
	//if ($submit == $_POST["username"] && $submit == $_POST["password"]) {echo "Tere {$username}! Teie parool on {$password}";}
?>
	</body>
</html>