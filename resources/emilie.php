<!DOCTYPE html>
<html>
<head>
   
    <link rel="stylesheet" type="text/css" href="stylesheet.css">

    <title>
        Emilie HTML page
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
        Emilie
    </h1>
    <h2>
        Middle Child!   Almost an Electrical Engineering Technologist
    </h2>
</br>
	<img src="emilie.jpg" alt="girl in suit jacket" style="width:200px;height:350px;border:10">
</br>
    <p class="cptn">
        <em>
            Figure: Emilie Ronalds
        </em>
    </p>
</br>
    <p>
        <strong>
            Emilie is currently in Montreal studying at Dawson College in the Electrical Engineering<br>
            Technology program. She has a DEC in the Cinema, Video and Commincations program at<br>
            Dawson College. She plans on backpacking accross Europe once she recieves her technical<br>
            diploma having never seen any of it before!<br><br>
            And has a crazy bag&shoe collection!
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