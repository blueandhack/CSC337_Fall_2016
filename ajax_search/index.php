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

Title: <input type="text" id="movie_name" onkeyup="getMovies()">
Actor: <input type="text" id="actor_name" onkeyup="getMovies()"> (last name, first name)
<div id="divToChange"></div>

<script>
    function getMovies() {
        var getMovieName = document.getElementById("movie_name").value;
        var getFirstNameAndLastName = document.getElementById("actor_name").value;

        var getLastName = "";
        var getFirstName = "";

        if (getFirstNameAndLastName.split(", ").length == 2) {
            var name = getFirstNameAndLastName.split(", ");
            getLastName = name[0];
            getFirstName = name[1];
        } else if (getFirstNameAndLastName.split(", ").length == 1 && getFirstNameAndLastName.search(", ") == -1) {
            if (getFirstNameAndLastName.charAt(getFirstNameAndLastName.length - 1) == ',') {
                getLastName = getFirstNameAndLastName.substring(0, getFirstNameAndLastName.length - 1);
            } else {
                getLastName = getFirstNameAndLastName;
            }
        } else if (getFirstNameAndLastName.split(", ").length == 1 && getFirstNameAndLastName.search(", ") != -1) {

            getFirstName = getFirstNameAndLastName;

        }

        if (getMovieName == "") {
            document.getElementById("divToChange").innerHTML = "";
        } else {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    var array = JSON.parse(xhttp.responseText);
                    console.log(array);
                    var str = "<br>Results for the string '" + getMovieName + "'<br><br>";
                    if (array.length == 0) {
                        str += "Sorry! We found nothing!";
                    } else {
                        for (var i = 0; i < array.length; i++) {
                            str += array[i]["name"] + ' ' + array[i]["first_name"] + ' ' + array[i]["last_name"] + ' ' + array[i]["year"] + '<br>';
                        }
                    }
                    document.getElementById("divToChange").innerHTML = str;

                }
            };
            xhttp.open("GET", "controller.php?movie_name=" + getMovieName + "&first_name=" + getFirstName + "&last_name=" + getLastName, true);
            xhttp.send();
        }

    }
</script>

</body>
</html>