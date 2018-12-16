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
            Please take the quiz below! You MUST have at least one sibling to partake.
        </strong>
    </p>

    <form action="action_page.php" method="POST">
        <p>Do you have (a) sister(s) or brother(s) or both?</p>
        <div>
            <input type="radio" id="sis" name="siblings" value="sister(s)!">
            <label for="sis">
                Sister(s)
            </label>
            <input type="radio" id="bro" name="siblings" value="brother(s)!">
            <label for="bro">
                Brother(s)
            </label>
            <input type="radio" id="both" name="siblings" value="both!">
            <label for="both">
                Both!
            </label>
        </div>

        <p>Do you have 1 sibling, 2 siblings or many?</p>
        <div>
            <label>
                Number of Siblings:
            </label><br>
            <input type="text" id="num" name="number"><br><br>
        </div>

        <div class="slidecontainer">
            <label for="myRange">
                How much do you love your siblings?
            </label><br>
            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
            <br><br>
        </div>

        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

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