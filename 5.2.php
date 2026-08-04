<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XMLHttpRequest with Callback</title>
</head>
<body>
    <button onclick="loadDoc()">Load Data</button>

    <p id="demo"></p>

    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                myFunction(xhttp);
            };
            xhttp.open("GET", "data2.txt", true);
            xhttp.send();
        }

        function myFunction(xhttp) {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("demo").innerHTML = xhttp.responseText;
            }
        }
    </script>
</body>
</html>
