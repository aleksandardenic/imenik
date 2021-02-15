<!DOCTYPE html>
<html>
<head>
<title>Naslov</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="wrap">
<div id="search">
<h1 id="naslov">Aplication student</h1>
<a href="insert.php">Insert</a>
<a href="remove.php">Delete</a>
<form action="#" method="GET">
<input type="text" name="criteria">
<input type="submit" value="Select"><br/>
</form>
</div>
<?php
include 'inc/getResults.php';
?>
</div>
</body>
</html>