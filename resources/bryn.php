<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>
        Bryn HTML page
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
        Bryn
    </h1>
    <h2>
        Eldest!   Almost a PhD
    </h2>
</br>
	<img src="bryn.jpg" alt="girl lying on ground" style="width:500px;height:350px;border:10">
</br>
    <p class="cptn">
        <em>
            Figure: Bryn Ronalds
        </em>
    </p>
</br>
    <p>
        <strong>
           Bryn is currently in Fort Collins, Colorado attending Colorado State University in the Department<br>
           of Atmospheric Sciences. She is a PhD candidate and has a Master�s Degree at McGill University in<br>
           Atmospheric Sciences and Meteorology! As well as a double DEC Science and Social Science from John<br> 
           Abbot College. The smarty pants.<br><br>
            And she LOVES cats! 
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