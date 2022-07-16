<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blood on the Clocktower Custom</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>Scripts Français Pour Blood On The Clocktower</h1>
	<section>
		<?php
		$files = [];
		$dir = opendir("./");
		while ($filename = readdir($dir)) {
			if (is_file($filename) && $filename != "index.php" && $filename != "style.css") {
				$files[] = $filename;
			}
		}
		sort($files);
		foreach ($files as $file) {
			list($type) = explode("_", $file);
			$name = str_replace("_", " ", $file);
			$name = preg_replace("#^(base|custom|teensy)(.*)fr\.json$#isU", "$2", $name);
			echo "<a href=\"$file\" class=\"$type\">[$type] $name</a>";
		}
		?>
	</section>
</body>

</html>
