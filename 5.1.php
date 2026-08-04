<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XMLHttpRequest Example</title>
</head>
<body>
    <button onclick="loadData()">load data</button>

    <p id="output"></p>

    <script>
        function loadData() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "data.txt", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("output").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }    
    </script>
</body>
</html>