<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>
        LED on&off
    </title>
    
</head>

<body>
	<h1>
	LED ON & OFF
	</h1>
	<p>
		<?php
			echo "Flash LED! Flash!";
			shell_exec("python3 LED.py");
		?>
	</p>
</body>

</html>