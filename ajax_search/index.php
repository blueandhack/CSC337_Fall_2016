<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Movie Search</title>
</head>
<body>

<h1>
    Ajax Movie and Actor Search
</h1>

<br>

Title: <input type="text" id="substring" onchange="getMovies()">
Actor: <input type="text" id="actor"> (last name, first name)
<div id="divToChange"></div>

<script>
    function getMovies() {
        var getSub = document.getElementById("substring").value;
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var array = JSON.parse(xhttp.responseText);
                console.log(array);
                var str = "<br>Results for the string '" + getSub + "'<br><br>";
                if (array.length == 0) {
                    str += "Sorry! We found nothing!";
                } else {
                    for (var i = 0; i < array.length; i++) {
                        str += array[i]["name_year"] + '<br>';
                    }
                }
                document.getElementById("divToChange").innerHTML = str;

            }
        };
        xhttp.open("GET", "controller.php?substring=" + getSub, true);
        xhttp.send();

        document.getElementById("substring").value = "";
    }
</script>

</body>
</html>