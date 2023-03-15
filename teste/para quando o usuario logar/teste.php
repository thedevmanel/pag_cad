<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>

    <div id="conteudo">

    </div>
    <script>
        $(document).ready(function (){ /* Ira carregar o arquivo html */
            $.post('teste_2.php', function(returna){
                $("#conteudo").html(returna)
            });
        });
    </script>
</body>
</html>