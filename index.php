<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="resources/stylesheet.css">

    <title>
        Sisters HTML page
    </title>

    <script type="text/javascript">
        function toinfopage()
        {
            var person = prompt("Please Enter A Number From 1-5 :)");
            switch(person)
            {
                case "M":
                    location.href = 'index.php';
                    break;
                case "1":
                    location.href = 'resources/bryn.php';
                    break;
                case "2":
                    location.href = 'resources/caroline.php';
                    break;
                case "3":
                    location.href = 'resources/emilie.php';
                    break;
                case "4":
                    location.href = 'resources/katianna.php';
                    break;
                case "5":
                    location.href = 'resources/genevieve.php';
                    break;
                case "Q":
                    location.href = 'resources/form.php';
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
        A Gift and a Curse
    </h2>

</br>

	<img src="resources/sisters.jpg" alt="5 girls on a log" style="width:600px;height:350px;border:10">

</br>

    <p class="cptn">
        <em>
            Figure: (from left to right) Genevieve, Katianna, Emilie, Caroline, Bryn
        </em>
    </p>

</br>

    <p>
        <strong>
            Below is a table that features the Year and Month that each of my four sisters and I were born.<br>
            When you click on a name you will be taken to a google search of each of us.
        </strong>
    </p>

	<table>
        <tr>
            <th>
                Sister
            </th>
            <th>
                Birth Year
            </th>
            <th>
                Birth Month
            </th>
        </tr>
        <tr>
            <td>
                <a href="https://www.google.ca/search?q=Bryn+Ronalds&rlz=1C1EJFA_enCA734CA736&oq=Bryn+Ronalds&aqs=chrome..69i57.8471j0j8&sourceid=chrome&ie=UTF-8">
                    Bryn
                </a>
            </td>
            <td>
                1990
            </td>
            <td>
                March
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://www.google.ca/search?rlz=1C1EJFA_enCA734CA736&ei=Pn2_W6vOAoqLjwSI17D4BQ&q=Caroline+Ronalds&oq=Caroline+Ronalds&gs_l=psy-ab.3..0i13k1l10.99386.101260.0.102703.8.8.0.0.0.0.328.960.0j3j1j1.5.0....0...1c.1.64.psy-ab..4.4.818...0i7i30k1j0i8i7i30k1.0.25pNEnDj2As">
                    Caroline
                </a>
            </td>
            <td>
                1991
            </td>
            <td>
                July
            </td>
		</tr>
		<tr>
            <td>
                <a href="https://www.google.ca/search?rlz=1C1EJFA_enCA734CA736&ei=pX2_W8OlK8vUjwSZ3a7oDQ&q=Emilie+Ronalds&oq=Emilie+Ronalds&gs_l=psy-ab.3..35i39k1j0i13k1j0i13i30k1l2.149632.150624.0.151814.6.6.0.0.0.0.228.707.3j0j2.5.0....0...1c.1.64.psy-ab..1.4.617...0i7i30k1j0i7i10i30k1j0i8i7i30k1.0.Lii2rvxOJG4">
                    Emilie
                </a>
            </td>
            <td>
                1994
            </td>
            <td>
                March
            </td>
		</tr>
		<tr>
            <td>
                <a href="https://www.google.ca/search?rlz=1C1EJFA_enCA734CA736&ei=P36_W5ixGemcjwSBlbvwCQ&q=Katianna+Ronalds&oq=Katianna+Ronalds&gs_l=psy-ab.3...21724.23335.0.24018.8.8.0.0.0.0.126.846.2j6.8.0....0...1c.1.64.psy-ab..0.7.726...0j0i7i30k1j0i7i10i30k1j0i13k1j0i30k1j0i8i7i30k1j0i13i30k1j0i8i13i30k1.0.R5Xjqhxc1PU">
                    Katianna
                </a>
            </td>
            <td>
                1997
            </td>
            <td>
                May
            </td>
		</tr>
		<tr>
            <td>
                <a href="https://www.google.ca/search?rlz=1C1EJFA_enCA734CA736&ei=WX6_W6v6CqbqjwT0kqjwBg&q=Genevieve+Melis-Brand&oq=Genevieve+Melis-Brand&gs_l=psy-ab.3..33i160k1.31020.39024.0.40225.21.21.0.0.0.0.121.2117.9j12.21.0....0...1c.1.64.psy-ab..0.19.1901...0j35i39k1j0i131k1j0i22i30k1.0.tNTeMTIefVE">
                    Genevieve
                </a>
            </td>
            <td>
                2001
            </td>
            <td>
                January
            </td>
        </tr>
    </table>

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