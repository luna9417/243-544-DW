<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>
        Katianna HTML page
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
        Katianna
    </h1>
    <h2>
        Second Youngest!   Aspiring Professional Dog-Walker
    </h2>
</br>
	<img src="katianna.jpg" alt="girl with dog" style="width:300px;height:350px;border:10">
</br>
    <p class="cptn">
        <em>
            Figure: Katianna Ronalds
        </em>
    </p>
</br>
    <p>
        <strong>
            Katianna is currently in Lachute finishing up a large spiffing up of their Mother's<br>
            cottage up in Lac Lousia. She is planning on returning to Montreal to start up a Dog-<br>
            Walking business and get an apartment.<br><br>
            And she LOVES dogs! (who would have guessed?)
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