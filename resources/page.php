<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>
        Quiz HTML page
    </title>
    
</head>

<body>
	<p>
		<?php
			$output = `ls -lart`;
			echo "<div>$output</div>";
		?>
	</p>
</body>

</html>