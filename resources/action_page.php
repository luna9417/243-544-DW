<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>
        Quiz HTML page
    </title>
    
    <script type="text/javascript">
        function toinfopage()
        {
            var person = prompt("Please Enter A Number From 1-5 :)");
            switch(person)
            {
                case "M":
                    location.href = '../index.php';
                    break;
                case "1":
                    location.href = 'bryn.php';
                    break;
                case "2":
                    location.href = 'caroline.php';
                    break;
                case "3":
                    location.href = 'emilie.php';
                    break;
                case "4":
                    location.href = 'katianna.php';
                    break;
                case "5":
                    location.href = 'genevieve.php';
                    break;
                case "Q":
                    location.href = 'form.php';
                    break;
                case "":
                    document.getElementById("text").innerHTML = "You Forgot To Put Something, Silly.";
                    break;
                default:
                    document.getElementById("text").innerHTML = "Not A Valid Input!";
            }
        }
    </script>
</head>

<body>
    <h1>
        Sisters
    </h1>

    <h2>
        Here's a Quiz!
    </h2>

</br>

    <p class="bigger">
        <strong>
            RESULTS!
        </strong>
    </p>

    <p>
        
	Congratulations!<br>
        You have <?php echo $_POST["number"]; ?> 
	<?php
            $sib = $_POST["siblings"];
	    if($sib=="both!"){
		echo "sisters and brothers!";
	    }else{
		echo $_POST["siblings"];
	    }
        ?>
	<br>
        We will leave how much you love them between you and them ;)
    </p>

    <p>
        <strong>
            The button below will lead you to new pages on the sisters for more information and<br> 
            personlized content!  If you type M you will be brought back to the main page AND<br>
            if you type Q you will be taken to a Quiz page!
        </strong>
    </p>

    <button onclick="toinfopage()">
        Click For More Info
    </button>

    <h3 id="text"></h3>

</body>

</html>