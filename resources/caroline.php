<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>
        Caroline HTML page
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
        Caroline
    </h1>
    <h2>
        Second Eldest!   A Sports and Swedish Massage Therapist
    </h2>
</br>
	<img src="caroline.jpg" alt="girl in sunglasses and hat" style="width:300px;height:350px;border:10">
</br>
    <p class="cptn">
        <em>
            Figure: Caroline Ronalds
        </em>
    </p>
</br>
    <p>
        <strong>
            Caroline is currently in Montreal working at a massage therapy clinique in Cote-des-Neiges<br>
            as well as offering good priced personalized sport and/or swedish massages out of her home<br>
            for friends, friends of friends and family. She is also a professional Photographer, she took<br>
            Photography at Dawson College and has done weddings and personal shoots.<br><br>
            And she has a crazy scarf collection!
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