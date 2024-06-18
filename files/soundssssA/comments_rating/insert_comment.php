<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Comentário</title>
</head>

<body>
    <!-- Form -->
    <h1>Comentário</h1>
    <form action="insert_comment_toBD.php" method="post">
        <!-- Text Comment -->
        <input type="text" name="comment_text" placeholder="Comentário"><br>
        <!-- Rating Stars -->
        Rating:
        <input type="range" name="rating" id="ratingRange" placeholder="0" min="0" max="5" value="0"
            oninput="updateRatingValue()">
        <span id="ratingValue">0</span><br>
        <!-- Get Client ID -->
        Id Cliente: 9
        <input type="checkbox" name="client_id" value="9" checked><br>
        Id Produto: 4
        <input type="checkbox" name="product_id" value="4" checked><br><br>
        <input type="submit" value="Enviar">

        <!-- Update ratingValue(User's Visual)-->
        <script>
            function updateRatingValue() {
                var ratingRange = document.getElementById("ratingRange");
                var ratingValue = document.getElementById("ratingValue");
                ratingValue.textContent = ratingRange.value;
            }
        </script>
    </form>
</body>

</html>