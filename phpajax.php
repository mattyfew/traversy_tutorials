<?php

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://bootswatch.com/3/cosmo/bootstrap.min.css">

        <script type="text/javascript">
            function showSuggestion(str) {
                if (str.length == 0) {
                    document.getElementById('output').innerHTML = ''
                } else {
                    var xmlhttp = new XMLHttpRequest()
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            console.log(this.responseText);
                            document.getElementById('output').innerHTML = this.responseText
                        }
                    }
                    xmlhttp.open('GET', 'suggest.php?q='+str, true)
                    xmlhttp.send()
                }
            }
        </script>
    </head>
    <body>
        <h1>Search Users</h1>
        <form>
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>

        <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>

    </body>
</html>
