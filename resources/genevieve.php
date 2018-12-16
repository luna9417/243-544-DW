<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>
        Genevieve HTML page
    </title>

    <script type="text/javascript">
        function toinfopage()
        {
            var person = prompt("Please Enter A Number From 1-5 :)");
            switch (person)
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
        Genevieve
    </h1>
    <h2>
        Youngest!   Aspiring Children's Psychologist
    </h2>
</br>
	<img src="genevieve.jpg" alt="girl with blonde curled hair smiling" style="width:350px;height:350px;border:10">
</br>
    <p class="cptn">
        <em>
            Figure: Genevieve Melis-Brand
        </em>
    </p>
</br>
    <p>
        <strong>
           Genevieve is currently in Sainte-Anne-de-Bellevue attending John Abbot College in Social<br>
           Science with Math and Physics electives. She will be attending University in Psychology.<br>
            She just graduated from High School and there recieved an award from the Women's Institute<br>
            for strength of character (Aka ridiculous stubborness).<br><br>
            And she just bought herself a TV!
        </strong>
    </p>

    <p>
        <strong>
            The button below will lead you to new pages on the sisters for more information and<br>
            personlized content! If you type M you will be brought back to the main page AND<br>
            if you type Q you will be taken to a Quiz page!
        </strong>
    </p>

    <button onclick="toinfopage()">
        Click For More Info
    </button>

    <h3 id="text"></h3>

</body>

</html>