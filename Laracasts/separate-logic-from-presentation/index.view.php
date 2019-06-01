<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Hello</title>
	</head>
	<body>
		<h1> <?php echo $greeting; ?> </h1>
		<?php foreach ($names as $name); ?>
		<?php echo "<li>$name</li>"; ?>
	</body>
</html>